<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PingHost
 *
 * @method static \Database\Factories\PingHostFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|PingHost newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PingHost newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PingHost query()
 * @property int $id
 * @property string $name
 * @property string $hostname
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PingHost whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PingHost whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PingHost whereHostname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PingHost whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PingHost whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PingHost whereUpdatedAt($value)
 * @property bool $slug
 * @method static \Illuminate\Database\Eloquent\Builder|PingHost whereSlug($value)
 * @property string $friendly_name
 * @method static \Illuminate\Database\Eloquent\Builder|PingHost whereFriendlyName($value)
 * @mixin \Eloquent
 */
class PingHost extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'active' => 'boolean',
        'slug' => 'boolean'
    ];
}
