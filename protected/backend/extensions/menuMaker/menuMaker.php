<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class menuMaker extends CWidget {

    public function init() {

        $this->render('menu',array());

    }

}