<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    /** @inheritdoc */
    protected $guarded = [];

    public $timestamps = false;

    const TYPE_TAROT = 'tarot';

    const TYPE_TAROT_DAY = 'tarot-day';
    const TYPE_TAROT_ADVICE = 'tarot-advice';
    const TYPE_TAROT_LOVE = 'tarot-love';
    const TYPE_LENORMAND = 'lenormand';
    const TYPE_RUNES = 'runes';

    public static function getAllTypes()
    {
        return [
           self::TYPE_TAROT_DAY => 'TAROT Card for Today',
           self::TYPE_TAROT_ADVICE  => 'TAROT Advice for Today',
           self::TYPE_TAROT_LOVE  => 'Love Matters Advice',
           self::TYPE_LENORMAND  => 'Lenormand',
           self::TYPE_RUNES  => 'Runes',
        ];
    }

    public static function getTypesTarot()
    {
        return [
            self::TYPE_TAROT_DAY => 'TAROT Card for Today',
            self::TYPE_TAROT_ADVICE  => 'TAROT Advice for Today',
            self::TYPE_TAROT_LOVE  => 'Love Matters Advice',
        ];
    }

    /**
     * @param string $type
     * @return array
     */
    public static function getTypesArray(string $type): array
    {
        if($type == self::TYPE_TAROT ||$type == Card::TYPE_TAROT_DAY || $type == Card::TYPE_TAROT_ADVICE || $type == Card::TYPE_TAROT_LOVE) {
            return self::getTypesTarot();
        } elseif ($type == self::TYPE_LENORMAND) {
            return [self::TYPE_LENORMAND  => 'Lenormand'];
        } elseif ($type == self::TYPE_RUNES) {
            return [self::TYPE_RUNES  => 'Runes'];
        }

        return [];
    }

    public static function getTitle(string $type): string
    {
        $title = '';
        if($type == self::TYPE_TAROT ) {
            return __('random-card.taro-title');
        } elseif ($type == self::TYPE_TAROT_LOVE) {
            return __('random-card.tarot3');
        } elseif ($type == Card::TYPE_TAROT_DAY) {
            return __('random-card.tarot1');
        } elseif ($type == self::TYPE_TAROT_ADVICE) {
            return __('random-card.tarot2');
        } elseif ($type == self::TYPE_LENORMAND) {
            return __('random-card.lenormand-title');
        } elseif ($type == self::TYPE_RUNES) {
            return __('random-card.runes');
        }

        return $title;
    }
}