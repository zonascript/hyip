<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Contact
 *
 * @property int $id
 * @property string $name
 * @property string $value
 * @property int $published
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contact whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contact whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contact wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contact whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contact whereValue($value)
 * @mixin \Eloquent
 * @property int $type_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contact email()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Contact phones()
 */
class Contact extends Model
{
    protected $table = 'contacts';

    protected $fillable = [
        'type_id',
        'value',
    ];

    public function scopeEmail()
    {
        return $this->whereTypeId(1);
    }

    public function scopePhones()
    {
        return $this->whereTypeId(2);
    }
}
