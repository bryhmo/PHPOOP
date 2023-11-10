<?php



/* If two Traits insert a method with the same name, a fatal error is produced, if the conflict is not explicitly resolved. */

/* To resolve naming conflicts between Traits used in the same class, the insteadof operator needs to be used to choose exactly one of the conflicting methods.*/

/* Since this only allows one to exclude methods, the as operator can be used to add an alias to one of the methods. Note the as operator does not rename the method and it does not affect any other method either. */


trait A {
    public function smallTalk() {
        echo 'a';
    }
    public function bigTalk() {
        echo 'A';
    }
}

trait B {
    public function smallTalk() {
        echo 'b';
    }
    public function bigTalk() {
        echo 'B';
    }
}

class Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
    }
}

class Aliased_Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
        B::bigTalk as talk;
    }
}


/* In this example, Talker uses the traits A and B. Since A and B have conflicting methods, it defines to use the variant of smallTalk from trait B, and the variant of bigTalk from trait A.

The Aliased_Talker makes use of the as operator to be able to use B's bigTalk implementation under an additional alias talk. */









?>