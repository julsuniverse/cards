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
        if($type == self::TYPE_TAROT || Card::TYPE_TAROT_DAY || Card::TYPE_TAROT_ADVICE || Card::TYPE_TAROT_LOVE) {
            return self::getTypesTarot();
        } elseif ($type == self::TYPE_LENORMAND) {
            return [self::TYPE_LENORMAND  => 'Lenormand'];
        } elseif ($type == self::TYPE_RUNES) {
            return [self::TYPE_RUNES  => 'Runes'];
        }

        return [];
    }
}