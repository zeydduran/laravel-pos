<?php


namespace LaravelPos\Factory;


use Pos\Entity\Card\CreditCardEstPos;
use Pos\Entity\Card\CreditCardGarantiPos;
use Pos\Entity\Card\CreditCardPayFor;
use Pos\Entity\Card\CreditCardPosNet;
use Pos\Entity\Card\CreditCardVakifBank;
use Pos\Exceptions\BankNotFoundException;

class CardFactory
{
    const CARDS = [
        'akbank'               => CreditCardEstPos::class,
        'ziraat'               => CreditCardEstPos::class,
        'isbank'               => CreditCardEstPos::class,
        'finansbank'           => CreditCardEstPos::class,
        'halkbank'             => CreditCardEstPos::class,
        'teb'                  => CreditCardEstPos::class,
        'yapikredi'            => CreditCardPosNet::class,
        'garanti'              => CreditCardGarantiPos::class,
        'qnbfinansbank-payfor' => CreditCardPayFor::class,
        'vakifbank'            => CreditCardVakifBank::class,
    ];

    public static function create(array $card)
    {
        $class = self::CARDS[$card['bank']];

        if (! $class) {
            throw new BankNotFoundException();
        }

        $number = $card['number'];
        $expireMonth = $card['month'];
        $expireYear = $card['year'];
        $cvv = $card['cvv'];
        $cardHolderName = $card['name'] ?? null;
        $cardType = $card['type'] ?? null;

        return new $class($number, $expireYear, $expireMonth, $cvv, $cardHolderName, $cardType);
    }
}