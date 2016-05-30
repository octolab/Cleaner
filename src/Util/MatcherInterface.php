<?php declare(strict_types = 1);

namespace OctoLab\Cleaner\Util;

/**
 * @author Kamil Samigullin <kamil@samigullin.info>
 */
interface MatcherInterface
{
    /**
     * @param string $package
     * @param array $devFiles
     *
     * @return array
     */
    public function match($package, array $devFiles);

    /**
     * @param array $rules
     *
     * @return MatcherInterface
     */
    public function setRules(array $rules);
}
