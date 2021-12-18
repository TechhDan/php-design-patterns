# Simple Factory

## Purpose

Simple Factory describes a class with one creation method with a large conditional based 
on method parameters. In most cases, a simple factory is an intermediate step of introducing
Factory Method or Abstract Factory patterns.

A simple factory is usually represented by a single method in a single class. Over time, this method
might become too big, so you may decide to extract parts of the method to subclasses. Once you do it 
several times, you might discover that the whole thing turned out into the classic factory method pattern.

Creating an abstract simple factory class is not the same as the abstract factory pattern.