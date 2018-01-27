<?php

declare(strict_types=1);

namespace Yuloh\Math;

class Calculator implements CalculatorInterface
{
    public function add(AddRequest $request): AddReply
    {
    	$sum = $request->getX() + $request->getY();

    	return (new AddReply())->setSum($sum);
    }

    public function subtract(\Yuloh\Math\SubtractRequest $request): SubtractReply
    {
    	$diff = $request->getX() - $request->getY();

    	return (new SubtractReply())->setDiff($diff);
    }
}

