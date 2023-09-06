<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
	integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
	crossorigin="anonymous" />
<link
	href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap"
	rel="stylesheet">

<style>

    @import url("myCSS.css");
</style>

<script		src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- <script src="../CSS/jquery.min.js"></script> -->


<div>
	<!-- Tab items -->
	<div class="tabs">
		<div class="tab-item active">
			<i class="tab-icon fas fa-code"></i> React
		</div>
		<div class="tab-item">
			<i class="tab-icon fas fa-cog"></i> Angular
		</div>
		<div class="tab-item">
			<i class="tab-icon fas fa-plus-circle"></i> Ember
		</div>
		<div class="tab-item">
			<i class="tab-icon fas fa-pen-nib"></i> Vue.JS
		</div>
		<div class="line"></div>
	</div>



	<!-- Tab content -->
	<div class="tab-content">
		<div class="tab-pane active">
			<h2>React</h2>
			<p>React makes it painless to create interactive UIs. Design simple
				views for each state in your application, and React will efficiently
				update and render just the right components when your data changes.</p>
		</div>
		<div class="tab-pane">
			<h2>Angular</h2>
			<p>Angular is an application design framework and development
				platform for creating efficient and sophisticated single-page apps.</p>
		</div>
		<div class="tab-pane">
			<h2>Ember</h2>
			<p>Ember.js is a productive, battle-tested JavaScript framework for
				building modern web applications. It includes everything you need to
				build rich UIs that work on any device.</p>
		</div>
		<div class="tab-pane">
			<h2>Vue.js</h2>
			<p>Vue (pronounced /vjuː/, like view) is a progressive framework for
				building user interfaces. Unlike other monolithic frameworks, Vue is
				designed from the ground up to be incrementally adoptable.</p>
		</div>
	</div>
</div>



<script type="text/javascript" src="myScript.js">


const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const tabs = $$(".tab-item");
const panes = $$(".tab-pane");

const tabActive = $(".tab-item.active");
const line = $(".tabs .line");

line.style.left = tabActive.offsetLeft + "px";
line.style.width = tabActive.offsetWidth + "px";

tabs.forEach((index) = {
  const pane = panes[index];

  tab.onclick = function () {
    $(".tab-item.active").classList.remove("active");
    $(".tab-pane.active").classList.remove("active");

    line.style.left = this.offsetLeft + "px";
    line.style.width = this.offsetWidth + "px";

    this.classList.add("active");
    pane.classList.add("active");
  };
});
</script>
