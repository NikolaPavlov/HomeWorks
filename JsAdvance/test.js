function Person(firstName, lastName) {
    this.firstName = firstName;
    this.lastName = lastName;
    return ({name: this.firstName + " " + this.lastName});
}

var me = new Person('Protoss', 'Dark');
console.log(me.firstName);
