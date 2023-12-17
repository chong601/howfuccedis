<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PppdLog
 *
 * @property int $id
 * @property int $ping_host
 * @property string $message_id
 * @property string $previous_message_id
 * @property string $message
 * @property string|null $message_sent_at
 * @property string|null $message_received_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\PppdLogFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|PppdLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PppdLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PppdLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|PppdLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PppdLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PppdLog whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PppdLog whereMessageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PppdLog whereMessageReceivedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PppdLog whereMessageSentAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PppdLog wherePingHost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PppdLog wherePreviousMessageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PppdLog whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PppdLog extends Model
{
    use HasFactory;
}
