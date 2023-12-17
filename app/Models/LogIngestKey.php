<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\LogIngestKey
 *
 * @property int $id
 * @property int $ping_host
 * @property string|null $description
 * @property string $token
 * @property string|null $last_accessed
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Database\Factories\LogIngestKeyFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|LogIngestKey newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LogIngestKey newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LogIngestKey query()
 * @method static \Illuminate\Database\Eloquent\Builder|LogIngestKey whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogIngestKey whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogIngestKey whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogIngestKey whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogIngestKey whereLastAccessed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogIngestKey wherePingHost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogIngestKey whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogIngestKey whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class LogIngestKey extends Model
{
    use HasFactory;
}
