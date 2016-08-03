<?php

/**
 * The MIT License
 *
 * Copyright (c) 2016, Coding Matters, Inc. (Gab Amba <gamba@gabbydgab.com>)
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace Student\Repository\Catalog;

use Student\Repository\Catalog\StudentListRepositoryInterface;

final class StudentListRepository implements StudentListRepositoryInterface
{
    private $students = [
        [
            'id'                    => '2005-1729',
            'first_name'            => 'Gabriel Nemesio',
            'middle_name'           => 'Achay',
            'last_name'             => 'Amba',
            'gender'                => 'Male',
            'date_of_birth'         => 'May 25, 1988',
            'civil_status'          => 'Single',
            'nationality'           => 'Filipino',
            'home_address'          => [
                'street'    => 'Purok 2',
                'barangay'  => 'Luinab',
                'city'      => 'Iligan City',
                'district'  => 'Lone',
                'province'  => 'Lanao del Norte'
            ],
            'contact_information'   => [
                'email'     => 'gamba@gabbydgab.com',
                'mobile'    => '09369501718',
                'telephone' => '228-0321',
                'facebook'  => '',
                'twitter'   => '',
                'instagram' => ''
            ],
            'scholarship'           => '',
            'graduate'              => true
        ],
        [
            'id'                    => '2016-1729',
            'first_name'            => 'Gabby',
            'middle_name'           => 'Achay',
            'last_name'             => 'Amba',
            'gender'                => 'Male',
            'date_of_birth'         => 'May 25, 1988',
            'civil_status'          => 'Single',
            'nationality'           => 'Filipino',
            'home_address'          => [
                'street'    => 'Purok 2',
                'barangay'  => 'Luinab',
                'city'      => 'Iligan City',
                'district'  => 'Lone',
                'province'  => 'Lanao del Norte'
            ],
            'contact_information'   => [
                'email'     => 'gamba@gabbydgab.com',
                'mobile'    => '09369501718',
                'telephone' => '228-0321',
                'facebook'  => '',
                'twitter'   => '',
                'instagram' => ''
            ],
            'scholarship'           => "Mayors' Scholar",
            'graduate'              => false
        ],
        [
            'id'                    => '2007-1729',
            'first_name'            => 'Gabby',
            'middle_name'           => 'Achay',
            'last_name'             => 'Amba',
            'gender'                => 'Male',
            'date_of_birth'         => 'May 25, 1988',
            'civil_status'          => 'Single',
            'nationality'           => 'Filipino',
            'home_address'          => [
                'street'    => 'Purok 2',
                'barangay'  => 'Luinab',
                'city'      => 'Iligan City',
                'district'  => 'Lone',
                'province'  => 'Lanao del Norte'
            ],
            'contact_information'   => [
                'email'     => 'gamba@gabbydgab.com',
                'mobile'    => '09369501718',
                'telephone' => '228-0321',
                'facebook'  => '',
                'twitter'   => '',
                'instagram' => ''
            ],
            'scholarship'           => "Mayors' Scholar",
            'graduate'              => true
        ],
        [
            'id'                    => '2014-1729',
            'first_name'            => 'Gabby',
            'middle_name'           => 'Achay',
            'last_name'             => 'Amba',
            'gender'                => 'Male',
            'date_of_birth'         => 'May 25, 1988',
            'civil_status'          => 'Single',
            'nationality'           => 'Filipino',
            'home_address'          => [
                'street'    => 'Purok 2',
                'barangay'  => 'Luinab',
                'city'      => 'Iligan City',
                'district'  => 'Lone',
                'province'  => 'Lanao del Norte'
            ],
            'contact_information'   => [
                'email'     => 'gamba@gabbydgab.com',
                'mobile'    => '09369501718',
                'telephone' => '228-0321',
                'facebook'  => '',
                'twitter'   => '',
                'instagram' => ''
            ],
            'scholarship'           => "Mayors' Scholar",
            'graduate'              => false
        ],
        [
            'id'                    => '2011-1729',
            'first_name'            => 'Gabby',
            'middle_name'           => 'Achay',
            'last_name'             => 'Amba',
            'gender'                => 'Male',
            'date_of_birth'         => 'May 25, 1988',
            'civil_status'          => 'Single',
            'nationality'           => 'Filipino',
            'home_address'          => [
                'street'    => 'Purok 2',
                'barangay'  => 'Luinab',
                'city'      => 'Iligan City',
                'district'  => 'Lone',
                'province'  => 'Lanao del Norte'
            ],
            'contact_information'   => [
                'email'     => 'gamba@gabbydgab.com',
                'mobile'    => '09369501718',
                'telephone' => '228-0321',
                'facebook'  => '',
                'twitter'   => '',
                'instagram' => ''
            ],
            'scholarship'           => "Mayors' Scholar",
            'graduate'              => false
        ],
    ];

    public function all()
    {
        return $this->students;
    }

    public function scholars()
    {
        $scholars = [];
        foreach ($this->students as $student) {
            if (!empty($student['scholarship'])) {
                $scholars []= $student;
            }
        }

        return $scholars;
    }

    public function undergraduates()
    {
        $undergraduates = [];

        foreach ($this->students as $student) {
            if (false === $student['graduate']) {
                $undergraduates []= $student;
            }
        }

        return $undergraduates;
    }

    public function graduates()
    {
        $graduates = [];

        foreach ($this->students as $student) {
            if (true === $student['graduate']) {
                $graduates []= $student;
            }
        }

        return $graduates;
    }

    public function transferees()
    {
        return $this->students;
    }
}
