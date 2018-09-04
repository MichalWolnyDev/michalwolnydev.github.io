var submit = document.getElementById('submit');
var list = document.getElementById('list');


submit.addEventListener('click', addTask);
list.addEventListener('click', delTask);

function addTask(){
  var task = document.getElementById('inputTask').value;
  var li = document.createElement('li');

  li.className = 'list-group-item mt-2 task';

  var newTaskText = document.createTextNode(task);
  li.appendChild(newTaskText);


  // delete button //

  var del = document.createElement('span');
  var x = document.createTextNode('X');
  del.appendChild(x);

  del.className = 'delete__task';
  li.appendChild(del);
 
  list.appendChild(li);
}

function delTask(e){
  if(e.target.classList.contains('delete__task')){
    var li = e.target.parentElement;
    list.removeChild(li);
  }
}
