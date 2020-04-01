<?php declare(strict_types=1);

namespace Bonami\Collection\Monoid;

/**
 * @template T
 */
interface Monoid {

	/**
	 * Empty element, which is neutral in concat operation.
	 *
	 * This means that it has this rules
	 *
	 * ```
	 * $e = $monoid->getEmpty();
	 * $e = $monoid->concat($any, $e); // $any
	 * $e = $monoid->concat($e, $any); // $any
	 * $e = $monoid->concat($e, $e); // $e
	 * ```
	 *
	 * @return T
	 */
	public function getEmpty();

	/**
	 * Returns monoid binary operation
	 *
	 * @return callable(T, T): T
	 */
	public function concat(): callable;

}
