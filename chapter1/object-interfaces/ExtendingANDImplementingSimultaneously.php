<?php

class One
{
    /* ... */
}

interface Usable
{
    /* ... */
}

interface Updatable
{
    /* ... */
}

// The keyword order here is important. 'extends' must come first.
class Two extends One implements Usable, Updatable
{
    /* ... */
}



/* An interface, together with type declarations, provides a good way to make sure that a particular object contains particular methods */
?>