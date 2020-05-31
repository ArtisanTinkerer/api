<?php


/**
 * Helper for creating models for testing.
 * Create makes model and saves to db
 * @param $class
 * @param $attributes
 * @return mixed
 */
function create($class, $attributes = [])
{
    return factory($class)->create($attributes);

}


/**
 * Helper for creating models for testing.
 * Create just makes model.
 * @param $class
 * @param $attributes
 * @return mixed
 */
function make($class, $attributes = [])
{
    return factory($class)->make($attributes);

}
