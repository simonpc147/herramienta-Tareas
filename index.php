
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
    <title>Proyecto-2023</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    
	<!-- Titulo -->
    <div class="content-body">
                <div class="nk-block-head nk-block-head-sm bg-white px-2 pb-1">
    <div class="nk-block-between g-3">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title text-primary">
            	 Actividades y Metas
            </h3>
        </div>
    </div>
</div>

<div class="nk-block">
	<div class="card">

	<div class="row">

	<ul class="nav-tabs" >

		<li class="nav-item">
			<a class="nav-link " data-content  href="#">
				<em class="icon ni ni-home"></em>
				<span data-target="#accion"> Plan de Acción</span>
			</a>
		</li>

		<li class="nav-item" >
			<a class="nav-link" data-content  href="#">
				<em class="icon ni ni-home"></em>
				<span data-target="#actividades"> Actividades Pendientes</span>
			</a>
		</li>

		<li class="nav-item" href="#">
			<a class="nav-link" data-content  href="#" >
				<em class="icon ni ni-home"></em>
				<span data-target="#metasSemanales">Metas de la Semana</span>
			</a>
		</li>
	</ul>

			<div class="tab-content">

	
							<!-- Primera Seccion -->	
                            <div class="tab-pane active" data-content id="accion">
				<div class="nk-block">
						
					<div class="date" style="margin-bottom: -15px;">
						<h3> Dia:
							<span id="dateText"></span>
							<span id="dateNumber"></span> 
							<span id="dateMonth"></span>
							del <span id="dateYear"></span>
						</h3>
					</div>

					<form id='act-tasks' action="">
						<div class="container_input">
							<input type="text" 
								   name='act-name'
								   class="input" 
								   id="inputs" 
								   placeholder="Actividad a desarrollar">
                                   <!-- name=""  Agregar nombre -->

							<input type="time" 
								   name='act-time-in'
								   class="input_time" 
								   id="input_time" 
								   style="width: 115px;">
                                   <!-- name=""  Agregar nombre -->

							<input type="time" 
								   name='act-time-out'
								   class="input_time" 
								   id="input_time2" 
								   style="width: 115px;">
                                   <!-- name=""  Agregar nombre -->
	
							<button class="btn_todo" id="btn_todo">
								<i id="boton-enter"class="fas fa-plus-circle"></i>
							</button>
						</div>
					</form>

					<div class="date" style="margin-bottom: -15px;">
						<h3> Tareas Pendientes: </h3>
					</div>
					
					<div class="container_todo">	
						<div id="container_list1" class="container_list"></div>
					</div>
				</div>
			</div>
				
			
								<!-- Segunda Seccion -->
			<div class="tab-pane " data-content id="actividades">
				<div class="nk-block">
					
					<div class="date" style="margin-bottom: -15px;">
						<h3> Actividades por desarrollar </h3>
					</div>

					<form id='todo-list' action="">
						<div class="container_input2">
							<input type="text"
								   name='todo-name' 
								   class="input2" 
								   id="input" 
								   placeholder="Actividad a desarrollar">
                                   <!-- name=""  Agregar nombre -->

							<button class="btn_todo" id="btn_todo2">
								<i id="boton-enter"class="fas fa-plus-circle"></i>
							</button>
						</div>
					</form>

					<div class="date" style="margin-bottom: -15px;">
						<h3> Actividades: </h3>
					</div>

					<div class="container_todo2">	
						<div id="container_list2" class="container_lists"></div>
					</div>
				</div>
			</div>


								<!-- Tercera Seccion -->
			<div class="tab-pane" data-content id="metasSemanales">
				<div class="nk-block">	
					
					<div class="date" style="margin-bottom: -15px;">
						<h3> Seguimiento de mis objetivos </h3>
					</div>

					<form id='toget-list' action="">
						<div class="container_input3">
							<input type="text" 
								   name='improved' 
								   class="input3" 
								   id="input3" 
								   placeholder="Objetivo a lograr">
                                   <!-- name=""  Agregar nombre -->

							<input type="date" 
								   name='improved-time' 
								   class="input_time" 
								   id="input_time3" 
								   style="width: 115px;">
                                   <!-- name=""  Agregar nombre -->
								   
							<button type="submit" class="btn_todo" id="btn_todo3">
								<i id="boton-enter"class="fas fa-plus-circle"></i>
							</button>
						</div>
					</form>

					<div class="date" style="margin-bottom: -15px;">
						<h3> Metas / Objetivos: </h3>
					</div>

					<div class="container_todo3">	
						<div id="container_list3" class="container_list3"></div>
					</div>
				</div>
			</div>

			<br>
			<br>
	</div>


	    </div>
	  </div>
    </div>
  </div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
  $.ajax({
    url: 'view-1.php',
    success: function(result) {
      $('#container_list1').html(result);
    }
  });
});


$(document).ready(function() {
  $.ajax({
    url: 'view-2.php',
    success: function(result) {
      $('#container_list2').html(result);
    }
  });
});


$(document).ready(function() {
  $.ajax({
    url: 'view-3.php',
    success: function(result) {
      $('#container_list3').html(result);
    }
  });
});

$(document).ready(function() {
  $("#act-tasks").submit(function(event) {
    event.preventDefault();

    var actName = $("input[name='act-name']").val();
    var actTimeIn = $("input[name='act-time-in']").val();
    var actTimeOut = $("input[name='act-time-out']").val();

    $.ajax({
      url: "plans.php",
      method: "POST",
      data: {actName: actName, actTimeIn: actTimeIn, actTimeOut: actTimeOut},
      success: function(response) {
        window.location.reload();
      },
      error: function(xhr, status, error) {
        alert(error);
      }
    });
  });
});

$(document).ready(function() {
  $("#todo-list").submit(function(event) {
    event.preventDefault();

    var todoName = $("input[name='todo-name']").val();

    $.ajax({
      url: "pending.php",
      method: "POST",
      data: {todoName: todoName},
      success: function(response) {
        window.location.reload();
      },
      error: function(xhr, status, error) {
        alert(error);
      }
    });
  });
});

$(document).ready(function() {
  $("#toget-list").submit(function(event) {
    event.preventDefault();

    var improved = $("input[name='improved']").val();
    var improvedTime = $("input[name='improved-time']").val();

    $.ajax({
      url: "goals.php",
      method: "POST",
      data: {improved: improved, improvedTime: improvedTime},
      success: function(response) {
        window.location.reload();
      },
      error: function(xhr, status, error) {
        alert(error);
      }
    });
  });
});
</script>
<script type="text/javascript" defer>
const targets = document.querySelectorAll("[data-target]");
const content = document.querySelectorAll("[data-content]");
const activation = document.querySelectorAll("[data-active]");

const targets2 = document.querySelectorAll("[data-target2]");
const content2 = document.querySelectorAll("[data-content2]");

targets.forEach((target) => {
  target.addEventListener("click", () => {
    content.forEach((c) => {
      c.classList.remove("active");
    });
    const t = document.querySelector(target.dataset.target);
    t.classList.add("active");

    const a = document.querySelector(target.dataset.target);
    a.classList.add("active");
  });
});

targets2.forEach((target) => {
  target2.addEventListener("click", () => {
    content2.forEach((c) => {
      c.classList.remove("active");
    });
    const t = document.querySelector(target2.dataset.target2);
    t.classList.add("active");

    const a = document.querySelector(target2.dataset.target2);
    a.classList.add("active");
  });
});

let nav = document.querySelectorAll(".nav-link");
for (let i = 0; i < nav.length; i++) {
  nav[i].onclick = function () {
    let a = 0;
    while (a < nav.length) {
      nav[a++].className = "nav-link";
    }
    nav[i].className = "nav-link active";
  };
}



const dateNumber = document.getElementById("dateNumber");
const dateText = document.getElementById("dateText");
const dateMonth = document.getElementById("dateMonth");
const dateYear = document.getElementById("dateYear");

const tasksContainer = document.getElementById("tasksContainer");

const setDate = () => {
  const date = new Date();
  dateNumber.textContent = date.toLocaleString("es", { day: "numeric" });
  dateText.textContent = date.toLocaleString("es", { weekday: "long" });
  dateMonth.textContent = date.toLocaleString("es", { month: "short" });
  dateYear.textContent = date.toLocaleString("es", { year: "numeric" });
};
setDate();



</script>


</body>
</html>



