 <div id="primorsko-content">
        <div class="col-lg-12 col-md-12 col-sm-12 post-title-block">
            <h1 class="text-center">{!! trans('home.primorsko_name') !!}</h1>
            <ul class="list-inline text-center">
                <li>{!! trans('home.primorsko_temperature') !!}</li>
                <li>{!! trans('home.primorsko_water_temperature') !!}</li>
                <li>{!! trans('home.primorsko_beach') !!} </li>
            </ul>
        </div>



        <div class="col-lg-9 col-md-9 col-sm-12" >
            <a class="weatherwidget-io" href="https://forecast7.com/en/42d2727d75/primorsko/" data-label_1="Primorsko" data-label_2="Bulgaria" data-theme="original" >PRIMORSKO WEATHER</a>
            <script>
              !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
            </script>

          <p class="lead">{!! trans('home.primorsko_one') !!}</p>
          <p>{!! trans('home.primorsko_two') !!}</p>

           
              <img src="../img/blog/primorsko-cover1.jpg" class="image-desc"/>
          

           <p>{!! trans('home.primorsko_three') !!}</p>

           
               <img src="../img/blog/primorsko-cover2.jpg" class="image-desc" />
           
           <p>{!! trans('home.primorsko_four') !!}</p>
       </div>

       @include('components.page-wrap-primorsko')


      </div>
    