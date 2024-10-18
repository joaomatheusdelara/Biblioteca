function Person(name) {
    this.name = name;
  }
  
  Person.prototype.greet = function() {
    console.log(`Hello, my name is ${this.name}`);
  };
  
  const joao = new Person("João");
  joao.greet();
  