<?php

abstract class AbstractChild extends AbstractClassOne {

    // redefining the method here, overriding the method here
    public function callotherAbstracMethod() {
        return $this->getRandomNumber(34, 100);
    }

    abstract public function getMyName();

    abstract protected function getMyBelovedGame(): string;

}






// THIS CLASS IS ALSO ABSTRACT | THIS DOES NOT NEED TO OVERRIDE THE METHODS, NOT A SINGLE ONE
// THIS CLASS IS ALSO ABSTRACT | THIS DOES NOT NEED TO OVERRIDE THE METHODS, NOT A SINGLE ONE
// THIS CLASS IS ALSO ABSTRACT | THIS DOES NOT NEED TO OVERRIDE THE METHODS, NOT A SINGLE ONE
// THIS CLASS IS ALSO ABSTRACT | THIS DOES NOT NEED TO OVERRIDE THE METHODS, NOT A SINGLE ONE
// THIS CLASS IS ALSO ABSTRACT | THIS DOES NOT NEED TO OVERRIDE THE METHODS, NOT A SINGLE ONE
// THIS CLASS IS ALSO ABSTRACT | THIS DOES NOT NEED TO OVERRIDE THE METHODS, NOT A SINGLE ONE
// THIS CLASS IS ALSO ABSTRACT | THIS DOES NOT NEED TO OVERRIDE THE METHODS, NOT A SINGLE ONE

// BUT THIS CLASS CAN OVERRIDE ANY METHOD OF ITS PARENT CLASS
// BUT THIS CLASS CAN OVERRIDE ANY METHOD OF ITS PARENT CLASS
// BUT THIS CLASS CAN OVERRIDE ANY METHOD OF ITS PARENT CLASS
// BUT THIS CLASS CAN OVERRIDE ANY METHOD OF ITS PARENT CLASS
// BUT THIS CLASS CAN OVERRIDE ANY METHOD OF ITS PARENT CLASS
// BUT THIS CLASS CAN OVERRIDE ANY METHOD OF ITS PARENT CLASS
// BUT THIS CLASS CAN OVERRIDE ANY METHOD OF ITS PARENT CLASS

// ANY CLASS WHICH WILL EXTENDS THIS CLASS, HAS TO IMPLEMENT ALL THE ABSTRACT METHODS OF ITS PARENT ABSTRACT CLASS
// ANY CLASS WHICH WILL EXTENDS THIS CLASS, HAS TO IMPLEMENT ALL THE ABSTRACT METHODS OF ITS PARENT ABSTRACT CLASS
// ANY CLASS WHICH WILL EXTENDS THIS CLASS, HAS TO IMPLEMENT ALL THE ABSTRACT METHODS OF ITS PARENT ABSTRACT CLASS
// ANY CLASS WHICH WILL EXTENDS THIS CLASS, HAS TO IMPLEMENT ALL THE ABSTRACT METHODS OF ITS PARENT ABSTRACT CLASS
// ANY CLASS WHICH WILL EXTENDS THIS CLASS, HAS TO IMPLEMENT ALL THE ABSTRACT METHODS OF ITS PARENT ABSTRACT CLASS
// ANY CLASS WHICH WILL EXTENDS THIS CLASS, HAS TO IMPLEMENT ALL THE ABSTRACT METHODS OF ITS PARENT ABSTRACT CLASS
// ANY CLASS WHICH WILL EXTENDS THIS CLASS, HAS TO IMPLEMENT ALL THE ABSTRACT METHODS OF ITS PARENT ABSTRACT CLASS
// ANY CLASS WHICH WILL EXTENDS THIS CLASS, HAS TO IMPLEMENT ALL THE ABSTRACT METHODS OF ITS PARENT ABSTRACT CLASS
// ANY CLASS WHICH WILL EXTENDS THIS CLASS, HAS TO IMPLEMENT ALL THE ABSTRACT METHODS OF ITS PARENT ABSTRACT CLASS
// ANY CLASS WHICH WILL EXTENDS THIS CLASS, HAS TO IMPLEMENT ALL THE ABSTRACT METHODS OF ITS PARENT ABSTRACT CLASS