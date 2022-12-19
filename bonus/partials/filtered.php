<div id="app">

<div class="container">
      <div class="row row-cols-2 row-cols-sm-3 row-cols-xl-6 py-5 justify-content-center">
          <div class="col py-3" v-for="disk in genresDisks" :key="disk.author" v-if="disk.genre === 'Pop'">
              <div class="card h-100 align-items-center" >
                  <img :src="disk.poster" class="card-img-top" :alt="disk.author" />
                      <div class="card-body text-center">
                        <h5 class="card-title text-white">
                        {{ disk.title.toUpperCase() }}
                        </h5>
                        <p class="card-text text-muted m-0">{{ disk.author }}</p>
                        <p class="card-text text-muted">{{ disk.year }}</p>
                        <p class="card-text text-muted">{{ disk.genre }}</p>
                      </div>
              </div>
          </div>
      </div>
 </div>

</div>