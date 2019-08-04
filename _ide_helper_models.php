<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * Class Layout
 *
 * @package App\Models
 * @mixin \Eloquent
 * @property int $id
 * @property string $name_ru
 * @property string $name
 * @property string|null $text_ru
 * @property string|null $text
 * @property int|null $theme_id
 * @property string $type
 * @property float|null $price_usd
 * @property float|null $price_uah
 * @property-read \App\Models\Theme|null $theme
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Layout newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Layout newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Layout query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Layout whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Layout whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Layout whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Layout wherePriceUah($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Layout wherePriceUsd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Layout whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Layout whereTextRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Layout whereThemeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Layout whereType($value)
 */
	class Layout extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Order
 *
 * @package App\Models
 * @mixin \Eloquent
 * @property int $id
 * @property int $user_id
 * @property int|null $layout_id
 * @property string|null $description
 * @property float $price
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereLayoutId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereUserId($value)
 */
	class Order extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Theme
 *
 * @package App\Models
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $name_ru
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Theme newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Theme newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Theme query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Theme whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Theme whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Theme whereNameRu($value)
 */
	class Theme extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $dob
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orders
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereDob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

