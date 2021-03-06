<?php
/**
 * Copyright (c) Benjamin Ansbach - all rights reserved.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Written by Benjamin Ansbach <ben@techworker.de>, 2017
 */
declare(strict_types = 1);
namespace Techworker\Ssml\Traits;

use Techworker\Ssml\ContainerElement;
use Techworker\Ssml\Element\Phoneme;

/**
 * Class PhonemeTrait
 *
 * Adds a phoneme tag.
 */
trait PhonemeTrait
{
    /**
     * Adds a phoneme element.
     *
     * @param string $alphabet
     * @param string $ph
     * @param string $text
     *
     * @return ContainerElement
     */
    public function phoneme(string $alphabet, string $ph, string $text): ContainerElement
    {
        /** @var ContainerElement $this */
        return $this->addElement(Phoneme::factory($alphabet, $ph, $text));
    }
}
