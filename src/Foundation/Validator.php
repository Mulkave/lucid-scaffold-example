<?php

/*
 * This file is part of the lucid package.
 *
 * © Vinelab <dev@vinelab.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Foundation;

/**
 * Base Validator class, to be extended by specific validators,
 * decorating the process of validating input. Simply declare
 * the $rules and call validate($attributes) and you have an
 * \Illuminate\Validation\Validator instance.
 *
 * @author Abed Halawi <abed.halawi@vinelab.com>
 */
class Validator
{
    protected $rules = [];

    protected $validation;

    public function __construct(Validation $validation)
    {
        $this->validation = $validation;
    }

    /**
     * Validate the given input.
     *
     * @param array $input The input to validate
     * @param array $rules Specify custom rules (will override class rules)
     *
     * @return bool
     *
     * @throws \App\Foundation\InvalidInputException
     */
    public function validate($input, array $rules = [])
    {
        $validation = $this->validation($input, $rules);

        if ($validation->fails()) {
            throw new InvalidInputException($validation);
        }

        return true;
    }

    /**
     * Get a validation instance out of the given input and optionatlly rules
     * by default the $rules property will be used.
     *
     * @param array $input
     * @param array $rules
     *
     * @return \Illuminate\Validation\Validator
     */
    public function validation($input, array $rules = [])
    {
        if (empty($rules)) {
            $rules = $this->rules;
        }

        return $this->validation->make($input, $rules);
    }
}
