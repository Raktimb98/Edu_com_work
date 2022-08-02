package main

import "fmt"

func main() {
	var a string
	fmt.Print("Enter a String : ")
	fmt.Scan(&a)
	fmt.Println()
	fmt.Printf("you enter :- %s", a)
}