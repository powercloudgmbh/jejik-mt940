<?php

declare(strict_types=1);

/*
 * This file is part of the Jejik\MT940 library
 *
 * Copyright (c) 2012 Sander Marechal <s.marechal@jejik.com>
 * Licensed under the MIT license
 *
 * For the full copyright and license information, please see the LICENSE
 * file that was distributed with this source code.
 */

namespace Jejik\MT940;

/**
 * Interface for a single MT940 statement
 *
 * @author Sander Marechal <s.marechal@jejik.com>
 */
interface StatementInterface
{
    /**
     * Getter for number
     *
     * @return string
     */
    public function getNumber(): ?string;

    /**
     * Setter for number
     *
     * @param string $number
     *
     * @return \Jejik\MT940\Statement
     */
    public function setNumber($number): Statement;

    /**
     * Getter for account
     *
     * @return \Jejik\MT940\AccountInterface
     */
    public function getAccount(): \Jejik\MT940\AccountInterface;

    /**
     * Setter for account
     *
     * @param \Jejik\MT940\AccountInterface $account
     *
     * @return \Jejik\MT940\Statement
     */
    public function setAccount(AccountInterface $account = null): Statement;

    /**
     * Getter for openingBalance
     *
     * @return \Jejik\MT940\BalanceInterface
     */
    public function getOpeningBalance(): \Jejik\MT940\BalanceInterface;

    /**
     * Setter for openingBalance
     *
     * @param \Jejik\MT940\BalanceInterface $openingBalance
     *
     * @return \Jejik\MT940\Statement
     */
    public function setOpeningBalance(BalanceInterface $openingBalance = null): Statement;

    /**
     * Getter for closingBalance
     *
     * @return \Jejik\MT940\BalanceInterface
     */
    public function getClosingBalance(): \Jejik\MT940\BalanceInterface;

    /**
     * Setter for closingBalance
     *
     * @param \Jejik\MT940\BalanceInterface $closingBalance
     *
     * @return \Jejik\MT940\Statement
     */
    public function setClosingBalance(BalanceInterface $closingBalance = null): Statement;

    /**
     * Getter for transactions
     *
     * @return array of \Jejik\MT940\TransactionInterface
     */
    public function getTransactions(): array;

    /**
     * Add a transaction
     *
     * @param TransactionInterface $transaction
     *
     * @return void
     */
    public function addTransaction(TransactionInterface $transaction): void;
}
