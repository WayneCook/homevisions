<v-container fluid class="nav-container">
    <v-container>
        <v-row class="d-flex justify-space-between align-center custom-row">
            <div class="logo-container d-flex align-center">
                <div class="logo-icon">
                    <svg version="1.1" id="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 382 199" style="enable-background:new 0 0 382 199;" xml:space="preserve">

                        <path class="logo-top" d="M304.8,67.3l-38.6,18.9l-75.3-40.6L131,77.4l-71.1,37.2L21,95.8l49.4-23.9v1l2-1v-1l-2,1v-45h40.3v25.5l-1,0.5
                        v1.6l2.5-1.3c0.4-0.2,0.6-0.6,0.6-1v-0.2c0-0.4,0.2-0.8,0.6-0.9L190.9,8L304.8,67.3z"/>
                        <polygon class="logo-bottom" points="363,100.2 190.9,188 79,127 115.1,108.2 190.9,150.4 285.2,100.2 324.1,81.3 "/>
                        <polygon class="logo-middle" points="219.4,79.8 190.9,93.6 162.4,79.8 190.9,66 "/>
                        <polygon class="logo-middle" points="222.9,82.6 222.9,112.5 193.3,126.9 193.3,97 "/>
                        <polygon class="logo-middle" points="188.5,97 188.5,126.9 158.9,112.5 158.9,82.6 "/>
                        <polygon class="logo-middle" points="308.2,69.1 269.3,87.9 266.2,86.2 304.8,67.3 "/>
                    </svg>
                </div>
                <div class="logo-text">
                    <h2 class="logo-home">home</h2>
                    <h2 class="logo-visions">visions</h2>
                    <p ma-0 class="logo-pm">Property Management</p>
                </div>
            </div>

            <div class="nav-links-container">
                <router-link class="nav-links" :to="{ name: 'home' }">Home</router-link>
                <router-link class="nav-links" :to="{ name: 'about' }">About</router-link>
                <router-link class="nav-links" :to="{ name: 'about' }">Blog</router-link>
                <v-btn ml-5 depressed class="nav-contact" dark>Contact</v-btn>
            </div>
        </v-row>
    </v-container>
</v-container>
