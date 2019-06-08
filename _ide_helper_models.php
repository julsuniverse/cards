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

