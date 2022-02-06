<?php


namespace App\classes;


class Operator
{
// operator
/*
    **Arithmatic Operator
         * Binary Operator (+,-,*,/,%)
         * Unary Operator (++,--,(-))

     * Assignment Operator (=,+=,*=,/=,%=, .=)
     * Conditional Operator (>,>=,<,<=,==,!=,===,!==)
     * Logical Operator (&&, ||, !)
 *
// ========statement========
    *Single line Statement

 *conditional Statement
         *if
         * if else
         * if else if
         * switch
 * Repeated Statement
         * for
         * while
         * do while
         * foreach
         * array
*/
    public $x;
    public $y;
    protected $z;

    public function index()
    {
//        echo 'Hello world';



        $this->x =10;
        $this->y =20;
        $this->z =30;
        $this->f =40;


//        switch ()

        switch ($this->f) {
            case 10:
                echo "hello world";
                break;
            case 20:
                echo " world";
                break;
            case 30:
                echo "Dhaka world";
                break;
            default:
                echo "Bye";
        }



////ifelse
//
//        if ($this->x > $this->y)
//        {
//            echo 'hello bitm';
//        }
//        elseif ($this->y > $this->z)
//        {
//            echo 'Hello Dhaka';
//        }
//        elseif ($this->z > $this->x)
//        {
//            echo 'Bye Bye Ta Ta';
//        }
//        else {
//            echo 'Bye';
//        }

//if
//        if ($this->x > $this->y)
//        {
//            echo 'its true';
//        } else {
//            echo 'False';
//        }


//        if ($this->x < $this->y)
//        {
//            echo 'its true';
//        }


//        logical operator  & conditional
//        echo ($this->x > $this->y) || ($this->y > $this->z);
//        echo '<br/>.....<br/>';
//        echo ($this->x > $this->y) || ($this->y < $this->z);
//        echo '<br/>.....<br/>';
//        echo ($this->x < $this->y) || ($this->y > $this->z);
//        echo '<br/>.....<br/>';
//        echo ($this->x < $this->y) || ($this->y < $this->z);
//        echo '<br/>.....<br/>';


////        assignment
//      echo $this->x += $this->y;
//      echo '<br/>';
//        echo $this->x -= $this->y;
//      echo '<br/>';
//       echo $this->x *= $this->y;
//      echo '<br/>';
//       echo $this->x /= $this->y;
//        echo '<br/>';
//        echo $this->x %= $this->y;
//        echo '<br/>';
//        echo $this->x .= $this->y;


//        urnary
//        echo $this->x++;
//        echo '<br/>';
//        echo $this->x--;
//        echo '<br/>';
//        echo ++$this->x;
//        echo '<br/>';
//        echo $this->x--;
//        echo '<br/>';
//        echo $this->x++;
//        echo '<br/>';
//        echo $this->x--;
//        echo '<br/>';
//        echo ++$this->x;
//        echo '<br/>';
//        echo --$this->x;

//        bainary
//        echo $this->x + $this->y;
//        echo '<br/>';
//        echo $this->x -  $this->y;
//        echo '<br/>';
//        echo $this->x * $this->y;
//        echo '<br/>';
//        echo $this->x / $this->y;
//        echo '<br/>';
//        echo $this->x % $this->y;
//        echo '<br/>';

    }

}