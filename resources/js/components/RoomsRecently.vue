<template>
  <div class="row property-destaques">
    <div class="col-lg-4 col-md-6 col-sm-12" v-for="unit in units.slice(0,6)" :key="unit.id">
      <div class="property-grid-item">
        <div class="property-content">
          <span v-if="unit.image_urls">
          <agile :autoplay-speed="6000" :speed="2500" autoplay="autoplay">
            <span v-for="n in unit.image_urls" :key="n">
              <img v-bind:src="n" alt="image_not_found" class="slide" />
            </span>
            <template slot="prevButton">
              <i class="fas fa-chevron-left"></i>
            </template>
            <template slot="nextButton">
              <i class="fas fa-chevron-right"></i>
            </template>
          </agile>
          </span>
          <span class="disponivel">
            Available from
            <strong>07 November</strong>
          </span>
          <h4 class="item-title">
            <span @click="searchUnit(unit.id)">{{ unit.full_address }}</span>
          </h4>
          <div class="price-and-location ul-li clearfix">
            <div class="post-meta ul-li clearfix">
              <ul class="clearfix">
                <li>
                  <a href="#!">
                    <i class="far fa-bed"></i>
                    {{ unit.bedrooms }} BD
                  </a>
                </li>
                <li>
                  <a href="#!">
                    <i class="fas fa-bath"></i>
                    {{ unit.bathrooms }} BA
                  </a>
                </li>
              </ul>
            </div>
            <ul class="clearfix">
              <li class="text-left">
                <small>Deposit Amount</small>
                <strong class="price-text">£ {{ unit.market_rent }}</strong>
              </li>
              <li class="text-right">
                <i class="fal fa-map-marker-alt"></i>
                {{ unit.city }}
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapState, mapActions, mapGetters } from "vuex";
import { VueAgile } from "vue-agile";

export default {
  
  components: {
    agile: VueAgile
  },
  data() {
    return {};
  },
  computed: {
    ...mapState("property", ["units", "id_unit"]),
    ...mapState("unit", ["unit"]),
  },
  created() {
    this.getUnits();
  },
  methods: {
    ...mapActions("property", ["getUnits","getId"]),
    //...mapActions("unit", ["getId"]),

    searchUnit(id) {
      window.location.href = `/room-details/${id}`;      
    }
  },
};
</script>

<style>
.agile__nav-button {
  background: transparent;
  border: none;
  color: #fff;
  cursor: pointer;
  font-size: 24px;
  height: 100%;
  position: absolute;
  top: 0;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  width: 50px;
}
.agile__nav-button:hover {
  background-color: rgba(0, 0, 0, 0.5);
  opacity: 1;
}
.agile__nav-button--prev {
  left: 0;
}
.agile__nav-button--next {
  right: 0;
}
.agile__dots {
  bottom: 10px;
  left: 50%;
  position: absolute;
  -webkit-transform: translateX(-50%);
  transform: translateX(-50%);
}
.agile__dot {
  margin: 0 10px;
}
.agile__dot button {
  background-color: transparent;
  border: 1px solid #fff;
  border-radius: 50%;
  cursor: pointer;
  display: block;
  height: 10px;
  font-size: 0;
  line-height: 0;
  margin: 0;
  padding: 0;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  width: 10px;
}
.agile__dot--current button,
.agile__dot:hover button {
  background-color: #fff;
}

.slide {
  display: block;
  height: 250px;
  -o-object-fit: cover;
  object-fit: cover;
  width: 100%;
}
.slide_full{
  display: block;
  height: 450px;
  -o-object-fit: cover;
  object-fit: cover;
  width: 100%;
}
</style>
