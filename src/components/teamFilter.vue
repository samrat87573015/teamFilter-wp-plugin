<template>
  <div>

    <!-- Loading Spinner -->
    <div v-if="loading">
      <div class="loader">
        <span class="inner_loder"></span>
      </div>
    </div>


    <div class="filter_wrapper" >
      <div class="tf_bg">
        <img src="https://www.lexgeneris.com/wp-content/uploads/2024/10/tf_bg.png" alt="">
      </div>
      <div class="tf_container">
        <div class="tf_filter_divied">
          <div class="tf_filter_title_area">
            <h2 class="tf_filter_title">Our Leaders</h2>
          </div>
          <div class="tf_filter_wrapper">

            <!-- Search Input -->
            <div class="search_input_wrap">
              <div class="search_input_inner_wrapp">
                <input class="search_input" type="text" v-model="searchTerm" @input="filterData" placeholder="Search By Name" />
                <div class="tf_search_icon">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                  </svg>
                </div>
              </div>
              <div class="tf_search_btn_area">
              <div class="tf_filter_text">
                <span>Filters</span>
              </div>
                <button class="tf_filter_clear_btn" @click="clearFilters">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M15.7502 9.34501L13.0577 12L15.7502 14.655C15.8252 14.7252 15.8849 14.8099 15.9257 14.9041C15.9666 14.9983 15.9876 15.0999 15.9876 15.2025C15.9876 15.3052 15.9666 15.4067 15.9257 15.5009C15.8849 15.5951 15.8252 15.6798 15.7502 15.75C15.6801 15.8195 15.597 15.8745 15.5056 15.9118C15.4143 15.9492 15.3164 15.9681 15.2177 15.9675C15.021 15.9667 14.8324 15.8886 14.6927 15.75L12.0002 13.0575L9.34522 15.75C9.20552 15.8886 9.01697 15.9667 8.82022 15.9675C8.72151 15.9681 8.62367 15.9492 8.53229 15.9118C8.44091 15.8745 8.3578 15.8195 8.28772 15.75C8.14803 15.6095 8.06962 15.4194 8.06962 15.2213C8.06962 15.0231 8.14803 14.833 8.28772 14.6925L10.9427 12L8.28772 9.34501C8.16485 9.20153 8.10064 9.01697 8.10794 8.82821C8.11523 8.63946 8.19348 8.4604 8.32705 8.32683C8.46062 8.19326 8.63967 8.11501 8.82843 8.10772C9.01719 8.10043 9.20174 8.16464 9.34522 8.28751L12.0002 10.9425L14.6552 8.28751C14.7247 8.21561 14.8076 8.15809 14.8992 8.11823C14.9909 8.07838 15.0895 8.05697 15.1895 8.05523C15.2894 8.05349 15.3887 8.07145 15.4817 8.10809C15.5747 8.14472 15.6596 8.19932 15.7315 8.26875C15.8034 8.33819 15.8609 8.42111 15.9007 8.51277C15.9406 8.60444 15.962 8.70306 15.9637 8.803C15.9655 8.90294 15.9475 9.00224 15.9109 9.09524C15.8742 9.18823 15.8197 9.27311 15.7502 9.34501ZM19.4252 19.425C17.9567 20.8933 16.0858 21.8933 14.049 22.2983C12.0123 22.7034 9.90112 22.4954 7.98255 21.7006C6.06399 20.9059 4.42418 19.5601 3.27047 17.8334C2.11676 16.1067 1.50098 14.0767 1.50098 12C1.50098 9.92335 2.11676 7.89332 3.27047 6.16663C4.42418 4.43994 6.06399 3.09412 7.98255 2.29937C9.90112 1.50462 12.0123 1.29662 14.049 1.70168C16.0858 2.10674 17.9567 3.10666 19.4252 4.575C20.4003 5.55003 21.1739 6.70759 21.7016 7.98158C22.2293 9.25557 22.501 10.621 22.501 12C22.501 13.379 22.2293 14.7444 21.7016 16.0184C21.1739 17.2924 20.4003 18.45 19.4252 19.425ZM18.3677 5.6325C17.1078 4.37696 15.5041 3.52289 13.7591 3.17816C12.0142 2.83342 10.2062 3.01348 8.56345 3.69558C6.92073 4.37769 5.51697 5.53126 4.52942 7.01062C3.54187 8.48999 3.01482 10.2288 3.01482 12.0075C3.01482 13.7862 3.54187 15.525 4.52942 17.0044C5.51697 18.4838 6.92073 19.6373 8.56345 20.3194C10.2062 21.0015 12.0142 21.1816 13.7591 20.8368C15.5041 20.4921 17.1078 19.6381 18.3677 18.3825C19.2068 17.5464 19.8725 16.5528 20.3267 15.4589C20.781 14.3649 21.0148 13.192 21.0148 12.0075C21.0148 10.823 20.781 9.6501 20.3267 8.55614C19.8725 7.46217 19.2068 6.46864 18.3677 5.6325Z"
                      fill="#101213" />
                  </svg>
                  Clear Filters</button>
              </div>
            </div>


            <div class="tf_select_wrap">

              <!-- service Filter -->
              <div class="tf_se_input_wrap">
                <select class="select_input" v-model="selectedService" @change="filterData">
                  <option value=""> Services</option>
                  <option v-for="service in services" :key="service.id" :value="service.id">
                    {{ service.name }}
                  </option>
                </select>
              </div>


              <!-- expertise Filter -->
              <div class="tf_se_input_wrap">
                <select class="select_input" v-model="selectedExpertise" @change="filterData">
                  <option value=""> Expertise</option>
                  <option v-for="expertise in expertises" :key="expertise.id" :value="expertise.id">
                    {{ expertise.name }}
                  </option>
                </select>
              </div>

              <!-- Practice Filter -->
              <div class="tf_se_input_wrap">
                <select class="select_input" v-model="selectedPractice" @change="filterData">
                  <option value=""> Practices</option>
                  <option v-for="practice in practices" :key="practice.id" :value="practice.id">
                    {{ practice.name }}
                  </option>
                </select>
              </div>




              <!-- Role Filter -->
              <div class="tf_se_input_wrap">
                <select class="select_input" v-model="selectedRole" @change="filterData">
                  <option value=""> Roles</option>
                  <option v-for="role in roles" :key="role.id" :value="role.id">
                    {{ role.name }}
                  </option>
                </select>
              </div>



            </div>

            <!-- Alphabet Filter Buttons -->
            <div class="tf_alphabet_filter">
              <button v-for="letter in 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'.split('')" :class="{'active': selectedAlphabet === letter}" :key="letter"
                @click="selectAlphabet(letter)">
                {{ letter }}
              </button>
            </div>

          </div>
        </div>
      </div>


    </div>




    <!-- Team Members List -->
    <div class="tf_members_list mt-100">
      <div class="tf_container">

        <div v-show="filteredMembers.length !== 0" class="tf_member_wrap">
          <div class="team_member" v-for="member in filteredMembers" :key="member.id">
            <div class="tf_member_inner">
              <div class="tf_member_img">
                <img v-if="member.featured_image_url" :src="member.featured_image_url" alt="Team Member Image" />
                <div class="tf_hover_btn_area">
                  <a :href="member.acf.button_url">{{ member.acf.image_hover_button_text }}</a>
                </div>
              </div>
              <div class="tf_member_info">
                <div class="tf_name_area">
                  <a :href="member.acf.button_url">
                    <h3>{{ member.title.rendered }}</h3>
                  </a>
                  <span>{{ member.acf.designation }}</span>
                </div>

                <div class="tf_contact_info">
                  <a :href="`mailto:${member.acf.email}`" v-show="member.acf.email" class="info_item">
                    <div class="icon">
                      <svg width="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M1.91675 19.1666V3.83325H21.0834V19.1666H1.91675ZM11.5001 12.4583L19.1667 7.66659V5.74992L11.5001 10.5416L3.83341 5.74992V7.66659L11.5001 12.4583Z"
                          fill="#3D6AF9" />
                      </svg>
                    </div>
                    <p>{{ member.acf.email }}</p>
                  </a>
                  <a :href="`tel:${member.acf.phone}`" v-show="member.acf.phone" class="info_item">
                    <div class="icon">
                      <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M19.1187 20.125C17.1222 20.125 15.1457 19.6938 13.1891 18.8312C11.2325 17.9688 9.45556 16.7389 7.85833 15.1417C6.26111 13.5444 5.03125 11.7715 4.16875 9.82292C3.30625 7.87431 2.875 5.89375 2.875 3.88125V2.875H8.52917L9.41563 7.69062L6.68437 10.4458C7.03576 11.0687 7.42708 11.6597 7.85833 12.2188C8.28958 12.7778 8.75278 13.2969 9.24792 13.776C9.71111 14.2392 10.2182 14.6825 10.7693 15.1057C11.3203 15.529 11.9153 15.9243 12.5542 16.2917L15.3333 13.5125L20.125 14.4948V20.125H19.1187Z"
                          fill="#3D6AF9" />
                      </svg>
                    </div>
                    <p>{{ member.acf.phone }}</p>
                  </a>
                  <div v-show="member.acf.location" class="info_item">
                    <div class="icon">
                      <svg width="17" height="21" viewBox="0 0 17 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M8.47049 0C3.80729 0 0 3.53194 0 7.85789C0 9.28162 0.708333 11.0613 2.18403 13.3064C3.3941 15.1682 4.92882 17.03 6.25694 18.6728C6.87674 19.4394 7.4375 20.1512 7.90972 20.7262C8.02778 20.8905 8.26389 21 8.5 21C8.73611 21 8.94271 20.8905 9.09028 20.7262C9.53299 20.1239 10.1233 19.412 10.7431 18.6728C12.0712 17.03 13.5764 15.1682 14.816 13.3064C16.2917 11.0613 17 9.28162 17 7.85789C17 3.53194 13.1927 0 8.52951 0H8.47049ZM8.47049 11.4993C6.31597 11.4993 4.54514 9.88396 4.54514 7.85789C4.54514 5.83181 6.28646 4.21643 8.47049 4.21643C10.6545 4.21643 12.3958 5.83181 12.3958 7.85789C12.3958 9.88396 10.6545 11.4993 8.47049 11.4993Z"
                          fill="#3D6AF9" />
                      </svg>

                    </div>
                    <p>{{ member.acf.location }}</p>
                  </div>

                </div>
                <div class="tf_short_desc">
                  <p>{{ member.acf.short_desc }}</p>
                </div>
                <div class="tf-Button_area">
                  <a :href="member.acf.button_url">
                    <p>{{ member.acf.button_text }}</p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div v-show="loading === false && filteredMembers.length === 0">
          <p class="tf_not_found_message">No members found.</p>
        </div>

        <div v-show="showAdvisors" class="our_advisers_area">
          <h2 class="tf_adviser_title">Our Advisors</h2>
          <div class="tf_member_wrap">
            <div class="team_member" v-for="advisor in advisors" :key="advisor.id">
              <div class="tf_member_inner">
                <div class="tf_member_img">
                  <img v-if="advisor.featured_image_url" :src="advisor.featured_image_url" alt="Team Member Image" />
                  <div class="tf_hover_btn_area">
                    <a :href="advisor.acf.button_url">{{ advisor.acf.image_hover_button_text }}</a>
                  </div>
                </div>
                <div class="tf_member_info">
                  <div class="tf_name_area">
                    <a :href="advisor.acf.button_url">
                      <h3>{{ advisor.title.rendered }}</h3>
                    </a>
                    <span>{{ advisor.acf.designation }}</span>
                  </div>

                  <div class="tf_contact_info">
                    <a :href="`mailto:${advisor.acf.email}`" v-show="advisor.acf.email" class="info_item">
                      <div class="icon">
                        <svg width="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M1.91675 19.1666V3.83325H21.0834V19.1666H1.91675ZM11.5001 12.4583L19.1667 7.66659V5.74992L11.5001 10.5416L3.83341 5.74992V7.66659L11.5001 12.4583Z"
                            fill="#3D6AF9" />
                        </svg>
                      </div>
                      <p>{{ advisor.acf.email }}</p>
                    </a>
                    <a :href="`tel:${advisor.acf.phone}`" v-show="advisor.acf.phone" class="info_item">
                      <div class="icon">
                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M19.1187 20.125C17.1222 20.125 15.1457 19.6938 13.1891 18.8312C11.2325 17.9688 9.45556 16.7389 7.85833 15.1417C6.26111 13.5444 5.03125 11.7715 4.16875 9.82292C3.30625 7.87431 2.875 5.89375 2.875 3.88125V2.875H8.52917L9.41563 7.69062L6.68437 10.4458C7.03576 11.0687 7.42708 11.6597 7.85833 12.2188C8.28958 12.7778 8.75278 13.2969 9.24792 13.776C9.71111 14.2392 10.2182 14.6825 10.7693 15.1057C11.3203 15.529 11.9153 15.9243 12.5542 16.2917L15.3333 13.5125L20.125 14.4948V20.125H19.1187Z"
                            fill="#3D6AF9" />
                        </svg>
                      </div>
                      <p>{{ advisor.acf.phone }}</p>
                    </a>
                    <div v-show="advisor.acf.location" class="info_item">
                      <div class="icon">
                        <svg width="17" height="21" viewBox="0 0 17 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M8.47049 0C3.80729 0 0 3.53194 0 7.85789C0 9.28162 0.708333 11.0613 2.18403 13.3064C3.3941 15.1682 4.92882 17.03 6.25694 18.6728C6.87674 19.4394 7.4375 20.1512 7.90972 20.7262C8.02778 20.8905 8.26389 21 8.5 21C8.73611 21 8.94271 20.8905 9.09028 20.7262C9.53299 20.1239 10.1233 19.412 10.7431 18.6728C12.0712 17.03 13.5764 15.1682 14.816 13.3064C16.2917 11.0613 17 9.28162 17 7.85789C17 3.53194 13.1927 0 8.52951 0H8.47049ZM8.47049 11.4993C6.31597 11.4993 4.54514 9.88396 4.54514 7.85789C4.54514 5.83181 6.28646 4.21643 8.47049 4.21643C10.6545 4.21643 12.3958 5.83181 12.3958 7.85789C12.3958 9.88396 10.6545 11.4993 8.47049 11.4993Z"
                            fill="#3D6AF9" />
                        </svg>

                      </div>
                      <p>{{ advisor.acf.location }}</p>
                    </div>

                  </div>
                  <div class="tf_short_desc">
                    <p>{{ advisor.acf.short_desc }}</p>
                  </div>
                  <div class="tf-Button_area">
                    <a :href="advisor.acf.button_url">
                      <p>{{ advisor.acf.button_text }}</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</template>

<script>

import { ref, onBeforeMount } from 'vue';
import axios from 'axios';

export default {
  setup() {
    const members = ref([]);
    const filteredMembers = ref([]);
    const expertises = ref([]);
    const services = ref([]);
    const roles = ref([]);
    const practices = ref([]);
    const advisors = ref([]);
    const selectedService = ref('');
    const selectedExpertise = ref('');
    const selectedRole = ref('');
    const selectedPractice = ref('');
    const searchTerm = ref('');
    const selectedAlphabet = ref('');
    const loading = ref(true);
    const showAdvisors = ref(true);
    const baseUrl = ref(window.location.origin);

    // Helper function to decode HTML entities (like &amp; -> &)
    const decodeEntities = (str) => {
      const textarea = document.createElement('textarea');
      textarea.innerHTML = str;
      return textarea.value;
    };

    const fetchData = async () => {
      loading.value = true;

      try {
        const responses = await Promise.all([
          axios.get(`${baseUrl.value}/wp-json/wp/v2/team?per_page=100`),
          axios.get(`${baseUrl.value}/wp-json/wp/v2/service?per_page=100`),
          axios.get(`${baseUrl.value}/wp-json/wp/v2/expertise?per_page=100`),
          axios.get(`${baseUrl.value}/wp-json/wp/v2/role?per_page=100`),
          axios.get(`${baseUrl.value}/wp-json/wp/v2/practice?per_page=100`),
        ]);

        const [teamResponse, serviceResponse, expertiseResponse, roleResponse, practiceResponse] = responses;

        // Decode HTML entities for team members' names and roles
        members.value = teamResponse.data.map(member => ({
          ...member,
          title: {
            ...member.title,
            rendered: decodeEntities(member.title.rendered) // Decode member's title
          },
        }));

        filteredMembers.value = members.value.filter(member => !member.acf.isadviser); // Filter out advisors

        // Decode HTML entities for other data
        services.value = serviceResponse.data.map(service => ({
          ...service,
          name: decodeEntities(service.name)
        }));
        expertises.value = expertiseResponse.data.map(expertise => ({
          ...expertise,
          name: decodeEntities(expertise.name)
        }));
        roles.value = roleResponse.data.map(role => ({
          ...role,
          name: decodeEntities(role.name)
        }));
        practices.value = practiceResponse.data.map(practice => ({
          ...practice,
          name: decodeEntities(practice.name)
        }));

        //advisor list 
        advisors.value = members.value.filter(member => member.acf.isadviser === true);

        // Fetch featured media for each team member
        await Promise.all(members.value.map(async (member) => {
          if (member.featured_media) {
            const mediaResponse = await axios.get(`${baseUrl.value}/wp-json/wp/v2/media/${member.featured_media}`);
            member.featured_image_url = mediaResponse.data.source_url;
          }
        }));

        loading.value = false;
      } catch (error) {
        console.error('Error fetching data:', error);
        loading.value = false;
      }
    };

    const filterData = () => {
      filteredMembers.value = members.value.filter((member) => {
        if (member.acf.isadviser) {
          return false; // Exclude advisors from filtering
        }

        const matchesService = selectedService.value
          ? member.service.includes(parseInt(selectedService.value))
          : true;

        const matchesExpertise = selectedExpertise.value
          ? member.expertise.includes(parseInt(selectedExpertise.value))
          : true;

        const matchesRole = selectedRole.value
          ? member.role.includes(parseInt(selectedRole.value))
          : true;

        const matchesPractice = selectedPractice.value
          ? member.practice.includes(parseInt(selectedPractice.value))
          : true;

        const matchesAlphabet = selectedAlphabet.value
          ? member.title.rendered.charAt(0).toLowerCase() === selectedAlphabet.value.toLowerCase()
          : true;

        const matchesSearchTerm = searchTerm.value
          ? member.title.rendered.toLowerCase().includes(searchTerm.value.toLowerCase())
          : true;

        return matchesExpertise && matchesService && matchesRole && matchesPractice && matchesAlphabet && matchesSearchTerm;
      });
    };

    const clearFilters = () => {
      selectedExpertise.value = '';
      selectedRole.value = '';
      selectedPractice.value = '';
      selectedService.value = '';
      searchTerm.value = '';
      selectedAlphabet.value = ''; // Clear the selected alphabet
      filterData();
    };

    const selectAlphabet = (letter) => {
      selectedAlphabet.value = letter;
      filterData();
    };

    onBeforeMount(fetchData);

    return {
      members,
      advisors,
      filteredMembers,
      expertises,
      services,
      roles,
      practices,
      selectedService,
      selectedExpertise,
      selectedRole,
      selectedPractice,
      searchTerm,
      selectedAlphabet,
      loading,
      fetchData,
      filterData,
      clearFilters,
      selectAlphabet,
      showAdvisors,
      baseUrl
    };
  }
};



</script>



<style scoped>
.tf_filter_divied{
  display: flex;
  justify-content: space-between;
  position: relative;
  z-index: 9;
}
.tf_filter_title_area{
  width: 30%;
}
.tf_filter_wrapper{
  width: 70%;
}
.tf_container {
  max-width: 1818px;
  margin: 0 auto;
}

/* fitter css */
.filter_wrapper {
  background: #DEDEDE;
  padding: 67px 30px;
  border-radius: 10px;
  font-family: jost !important;
  position: relative;
}
.tf_bg {
    position: absolute;
    left: 0;
    bottom: 0px;
    height: 100%;
    opacity: .5;
}
.tf_bg img {
    width: 100%;
    object-fit: cover;
    height: 100%;
}
.tf_filter_text span{
  font-size: 24px;
  line-height: 16px;
  font-weight: 600;
  color: #3E3D3D;
}

.tf_alphabet_filter button {
  border: none;
  padding: 10px 20px;
  border-radius: 8px;
  font-size: 18px;
  line-height: 19px;
  font-weight: 600;
  color: #3E3D3D;
  background: #ffffff;
  cursor: pointer;
}
.tf_alphabet_filter button.active {
  color: #fff;
  background: #3D6AF9;

}

.tf_not_found_message {
  text-align: center;
  margin-top: 30px;
  font-size: 20px;
  line-height: 30px;
  font-weight: 400;
  color: #313436;
}

.tf_member_wrap {
  display: grid;
  grid-template-columns: 2fr 2fr;
  gap: 30px;
}


.search_input_wrap {
  position: relative;
  width: 100%;
}

.tf_search_btn_area {
  display: flex;
  gap: 10px;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 30px;
}


.tf_search_icon svg {
  width: 30px;
  color: #313436;
}

.search_input_inner_wrapp {
  width: 100%;
  margin-bottom: 30px;
  position: relative;
}

.search_input {
  width: 100%;
  height: 60px;
  padding: 0 30px;
  border: 1px solid #10121380;
  border-radius: 8px;
  font-size: 18px;
  line-height: 32px;
}

.tf_search_icon {
    position: absolute;
    top: 50%;
    right: 23px;
    left: auto;
    width: 30px;
    transform: translateY(-50%);
}


.tf_alphabet_filter {
    display: flex;
    gap: 7px;
    flex-wrap: wrap;
    margin-top: 15px;
    display: none;
}

button.tf_filter_clear_btn {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  border: none;
  background: transparent;
  cursor: pointer;
  font-size: 16px;
  line-height: 16px;
  font-weight: 600;
  color: #3E3D3D;
}


.tf_select_wrap {
  display: grid;
  grid-template-columns: 2fr 2fr;
  align-items: center;
  gap: 15px;
}

.tf_se_input_wrap {
  width: 100%;
}

.select_input {
  width: 100%;
  height: 50px;
  border-radius: 8px;
  border: 1px solid #10121380;
  padding: 0 30px;
  cursor: pointer;
  font-size: 18px;
}

/* team member css */
.team_member {
  margin-bottom: 45px;
}

.tf_members_list {
  padding: 100px 30px;
}


.tf_member_inner {
  display: flex;
  align-items: center;
  gap: 40px;
}

.tf_name_area h3 {
  font-size: 43px;
  color: #101213;
  line-height: 43px;
  font-family: jost;
}

.tf_member_img {
  width: 50%;
  position: relative;
  border-radius: 15px;
  overflow: hidden;
}

.tf_hover_btn_area {
  position: absolute;
  bottom: -100px;
  left: 0;
  right: 0;
  width: 100%;
  background: #003DFF;
  text-align: center;
  padding: 27px 0;
  color: #ffffff;
  opacity: 0;
  visibility: hidden;
  transition: .3s;

}

.tf_hover_btn_area a {
  color: #ffffff;
  font-size: 24px;
  line-height: 25px;
  font-weight: 600;
  display: inline-block;
  padding: 3px 0;
  transition: .3s;
  position: relative;
}

.tf_hover_btn_area a::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 1px;
  background: #ffffff;
  transition: .3s;
  width: 0;
}

.tf_hover_btn_area a:hover::after {
  width: 100%;
}

.team_member:hover .tf_hover_btn_area {
  bottom: 0;
  opacity: 1;
  visibility: visible;
}



.tf_member_info {
  width: 50%;
}

.tf_name_area {
  margin-bottom: 13px;
}

.tf_name_area span {
  font-size: 20px;
  line-height: 30px;
  color: #003DFF;
  font-family: jost;
}

.tf_member_img img {
  width: 100%;
  transition: .3s;
}

.team_member:hover .tf_member_img img {
  transform: scale(1.2);
}

.info_item {
  display: flex;
  align-items: center;
  gap: 7px;
  margin-bottom: 5px;
}

.info_item .icon {
  margin-bottom: 0;
  line-height: .4;
}

.info_item p {
  font-size: 18px;
  color: #313436;
  font-family: jost;
  font-weight: 500;
  line-height: 28px;
}

.tf_short_desc p {
  font-size: 18px;
  line-height: 23px;
  color: #313436;
  font-weight: 400;
}

.tf-Button_area {
  margin-top: 13px;
}

.tf-Button_area a {
  font-size: 18px;
  line-height: 19px;
  color: #313436;
  font-weight: 600;
  display: inline-block;
}

.tf_short_desc {
  margin-top: 13px;
}

.our_advisers_area {
  padding-top: 100px;
}

.tf_adviser_title,
.tf_filter_title {
  font-size: 64px;
  line-height: 1.1;
  font-weight: 600;
  color: #101213;
  margin-bottom: 100px;
  position: relative;
}

.tf_adviser_title::after {
  content: '';
  position: absolute;
  bottom: 10px;
  left: auto;
  right: 0;
  width: 74%;
  height: 1px;
  background: #D9D9D9;
}
.tf_filter_title {
    margin-bottom: 30px;
}


@media (min-width: 1200px) and (max-width: 1400px) {
  .tf_adviser_title::after {
    width: 70%;

  }
  .tf_adviser_title,
.tf_filter_title {
  font-size: 50px;
}


  .tf_name_area h3 {
    font-size: 33px;
  }

  .tf_name_area {
    margin-bottom: 11px;
  }

  .tf_name_area span {
    font-size: 17px;
    line-height: 23px;
  }

  .info_item p {
    font-size: 16px;
    line-height: 24px;
  }

  .tf_short_desc p {
    font-size: 16px;
    line-height: 19px;
  }

}

@media (min-width: 768px) and (max-width: 1199px) {

  .tf_adviser_title::after {
    bottom: -20px;
    width: 100%;

  }
  .tf_adviser_title,
.tf_filter_title {
  font-size: 50px;
}

.tf_filter_divied {
    flex-direction: column;
}

.tf_filter_title_area {
    width: 100%;
}
.tf_filter_wrapper {
    width: 100%;
}


  .tf_select_wrap {
    display: grid;
    grid-template-columns: 2fr 2fr;
  }

  .tf_se_input_wrap {
    width: 100%;
  }

  .tf_member_inner {
    gap: 25px;
    flex-direction: column;
  }

  .tf_member_img {
    width: 100%;
  }

  .tf_member_info {
    width: 100%;
  }

  .tf_short_desc {
    margin-top: 10px;
  }

}


@media (max-width: 767px) {

  .tf_filter_divied {
    flex-direction: column;
}

.tf_filter_title_area {
    width: 100%;
}
.tf_filter_wrapper {
    width: 100%;
}

  .tf_adviser_title::after {
    bottom: -20px;
    width: 100%;

  }

  .tf_adviser_title,
  .tf_filter_title {
    font-size: 40px;
  }

  .tf_member_inner {
    gap: 25px;
    flex-direction: column;
  }

  .tf_member_img {
    width: 100%;
  }

  .tf_member_info {
    width: 100%;
  }

  .tf_short_desc {
    margin-top: 10px;
  }

  .tf_member_wrap {
    grid-template-columns: 1fr;
  }

  .tf_name_area h3 {
    font-size: 34px;
  }

  .tf_select_wrap {
    grid-template-columns: 1fr;
  }

  .tf_se_input_wrap {
    width: 100%;
  }

  .tf_search_btn_area {
    width: 100%;
    gap: 20px;
  }

  button.tf_search_btn {
    width: 135px;
    font-size: 16px;

  }

  .search_input_wrap {
    gap: 20px;
    flex-direction: column;
  }

  .search_input_inner_wrapp {
    width: 100%;
  }

}
</style>
