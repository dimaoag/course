<?php

namespace App\Model\User\Entity;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use  Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;
use Laravel\Passport\HasApiTokens;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property string $verify_token

 * @property string $status
 * @property string $role
 *
 * @property Network[] networks
 *
 * @method Builder byNetwork(string $network, string $identity)
 *
 */


class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    public const STATUS_WAIT = 'wait';
    public const STATUS_ACTIVE = 'active';

    public const ROLE_USER = 'user';
    public const ROLE_MODERATOR = 'moderator';
    public const ROLE_ADMIN = 'admin';


    protected $fillable = [
        'name', 'last_name', 'email',  'phone', 'password', 'verify_token', 'status', 'role'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];



    public static function register(string $name, string $email, string $password): self
    {
        return static::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
            'verify_token' => Str::uuid(),
            'role' => self::ROLE_USER,
            'status' => self::STATUS_WAIT,
        ]);
    }


    public static function registerByNetwork(string $network, string $identity): self
    {
        $user = static::create([
            'name' => $identity,
            'email' => null,
            'password' => null,
            'verify_token' => null,
            'role' => self::ROLE_USER,
            'status' => self::STATUS_ACTIVE,
        ]);
        $user->networks()->create([
            'network' => $network,
            'identity' => $identity,
        ]);
        return $user;
    }


    public function attachNetwork(string $network, string $identity): void
    {
        $exists = $this->networks()->where([
            'network' => $network,
            'identity' => $identity
        ])->exists();

        if ($exists){
            throw new \DomainException('Already added network');
        }

        $this->networks()->create([
            'network' => $network,
            'identity' => $identity,
        ]);
    }



    public static function new($name, $email): self
    {
        return static::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt(Str::random()),
            'role' => self::ROLE_USER,
            'status' => self::STATUS_ACTIVE,
        ]);
    }



    public function isWait(): bool
    {
        return $this->status === self::STATUS_WAIT;
    }

    public function isActive(): bool
    {
        return $this->status === self::STATUS_ACTIVE;
    }

    public function isModerator(): bool
    {
        return $this->role === self::ROLE_MODERATOR;
    }

    public function isAdmin(): bool
    {
        return $this->role === self::ROLE_ADMIN;
    }

    public static function rolesList(): array
    {
        return [
            self::ROLE_USER => 'User',
            self::ROLE_MODERATOR => 'Moderator',
            self::ROLE_ADMIN => 'Admin',
        ];
    }

    public static function statusesList(): array
    {
        return [
            self::STATUS_ACTIVE => 'Активный',
            self::STATUS_WAIT => 'Не активный',
        ];
    }


    public function changeRole($role): void
    {
        if (!array_key_exists($role, self::rolesList())) {
            throw new \InvalidArgumentException('Undefined role "' . $role . '"');
        }
        if ($this->role === $role) {
            throw new \DomainException('Role is already assigned.');
        }
        $this->update(['role' => $role]);
    }

    public function verify(): void
    {
        if (!$this->isWait()) {
            throw new \DomainException('User is already verified.');
        }

        $this->update([
            'status' => self::STATUS_ACTIVE,
            'verify_token' => null,
        ]);
    }




    public function networks()
    {
        return $this->hasMany(Network::class, 'user_id', 'id');
    }


    public function scopeByNetwork(Builder $query, string $network, string $identity): Builder
    {
        return $query->whereHas('networks', function(Builder $query) use ($network, $identity) {
            $query->where('network', $network)->where('identity', $identity);
        });
    }

    public function findForPassport($identifier)
    {
        return self::where('email', $identifier)->where('status', self::STATUS_ACTIVE)->first();
    }



}
