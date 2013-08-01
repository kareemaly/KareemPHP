<?php namespace Gallery\Group;

use \Illuminate\Database\Query\Builder;

class ImageGroupAlgorithm extends \BaseAlgorithm {

	/**
	 * Get an empty query for this model.
	 *
     * @return Builder
	 */
    public function emptyQuery()
    {
        return Group::query();
    }
}