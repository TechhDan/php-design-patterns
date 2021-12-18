# Factory Method

## Short description

Provides an interface for creating objects in a superclass,
but allows subclasses to alter the type of objects that will be created

## Long description

Factory method is a creational design pattern which solves the problem
of creating product objects without specifying their concrete classes.

Factory method defines a method, which should be used for creating objects instead
of direct constructor call (new operator). Subclasses can override this method
to change the class of objects that will be created.

The good point over the Simple Factory is you can subclass it to implement different ways
to create objects.