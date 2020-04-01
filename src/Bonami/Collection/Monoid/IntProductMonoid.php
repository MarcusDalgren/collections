<?php declare(strict_types=1);

namespace Bonami\Collection\Monoid;

/**
 * @implements Monoid<int>
 */
class IntProductMonoid implements Monoid {

	public function getEmpty(): int {
		return 1;
	}

	public function concat(): callable {
		return static function (int $a, int $b): int { return $a * $b; };
	}

}
