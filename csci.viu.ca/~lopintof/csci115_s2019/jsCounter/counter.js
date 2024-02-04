  var counter = {
  cnt:0,
  get reset() {this.cnt = 0;},
  get value() {return this.cnt;},
  get increment() {this.cnt++;},
  get decrement() {this.cnt--;},
  set add(value)  {this.cnt += value;},
  set sub(value)  {this.cnt -= value;}
}
