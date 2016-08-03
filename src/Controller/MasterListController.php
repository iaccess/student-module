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

namespace Student\Controller;

use Student\Service\Catalog\MasterListService;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class MasterListController extends AbstractActionController
{
    /**
     * @var MasterListService
     */
    private $masterlist;

    public function __construct(MasterListService $masterlist)
    {
        $this->masterlist = $masterlist;
    }

    public function indexAction()
    {
        $all            = $this->masterlist->listAll();
        $scholars       = $this->masterlist->withScholarship();
        $undergraduates = $this->masterlist->undergraduates();
        $graduates      = $this->masterlist->graduates();

        $data = [
            'counter'   => [
                'overall'           => $this->countTotal($all),
                'scholars'          => $this->countTotal($scholars),
                'undergraduates'    => $this->countTotal($undergraduates),
                'graduates'         => $this->countTotal($graduates),
            ],
            'students'          => $all,
            'scholars'          => $scholars,
            'undergraduates'    => $undergraduates,
            'graduates'    => $graduates,
        ];

        return new ViewModel($data);
    }

    public function historyAction()
    {
        $data = [
            'students'  => $this->masterlist->listAll()
        ];

        return new ViewModel($data);
    }

    public function scholarsAction()
    {
        $data = [
            'students'  => $this->masterlist->withScholarship()
        ];

        return new ViewModel($data);
    }

    public function currentAction()
    {
        $data = [
            'students'  => $this->masterlist->undergraduates()
        ];

        return new ViewModel($data);
    }

    public function alumniAction()
    {
        $data = [
            'students'  => $this->masterlist->graduates()
        ];

        return new ViewModel($data);
    }

    /**
     *
     */
    private function countTotal(array $students)
    {
        return count($students);
    }
}
