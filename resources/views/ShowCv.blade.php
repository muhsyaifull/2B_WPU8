<link href='assets/CV.css' rel='stylesheet' type='text/css'>

<div class="container">
  <div class="header">
    <div class="full-name">
      <span class="name" name="name">{{$profile->nama}}</span>
    </div>
    <div class="contact-info">
      <span class="email">Email: </span>
      <span class="email-val" name="email">{{$profile->email}}</span>
      <span class="separator"></span>
      <span class="phone">Phone: </span>
      <span class="phone-val" name="no_telepon">{{$profile->no_telepon}}</span>
    </div>
      
    <div class="about">
      <span class="position">Description: </span>
      <span class="desc">
        {{$profile->description}}
      </span>
    </div>
  </div>
   <div class="details">
    <div class="section">
      <div class="section__title">Experience Work</div>
      <div class="section__list">
        <div class="section__list-item">
          <div class="left">
            <div class="education" name="nama_perusahaan">{{$pekerjaan->nama_perusahaan}}</div>
            <div class="addr">{{$pekerjaan->posisi}}</div>
            <div class="duration">Jan 2011 - Feb 2015</div>
          </div>
      </div>
    </div>
    <div class="section">
      <div class="section__title">Education</div>
      <div class="section__list">
        <div class="section__list-item">
          <div class="left">
            {{-- <div class="name" name="education">{{$resume->education}}</div> --}}
            {{-- <div class="addr">San Fr, CA</div>
            <div class="duration">Jan 2011 - Feb 2015</div> --}}
          </div>
        </div>
      </div>
      
  {{-- </div>
     <div class="section">
      <div class="section__title">Projects</div> 
       <div class="section__list">
         <div class="section__list-item">
           <div class="name">DSP</div>
           <div class="text">I am a front-end developer with more than 3 years of experience writing html, css, and js. I'm motivated, result-focused and seeking a successful team-oriented company with opportunity to grow.</div>
         </div>
         
         <div class="section__list-item">
                    <div class="name">DSP</div>
           <div class="text">I am a front-end developer with more than 3 years of experience writing html, css, and js. I'm motivated, result-focused and seeking a successful team-oriented company with opportunity to grow. <a href="/login">link</a>
           </div>
         </div>
       </div>
    </div> --}}
     <div class="section">
       <div class="section__title">Skills</div>
       <div class="skills">
         <div class="skills__item">
           <div class="left"><div class="name" name="skill">
            {{-- {{$resume->skill}} --}}
             </div></div>
           {{-- <div class="right">
                          <input  id="ck1" type="checkbox" checked/>

             <label for="ck1"></label>
                          <input id="ck2" type="checkbox" checked/>

              <label for="ck2"></label>
                         <input id="ck3" type="checkbox" />

              <label for="ck3"></label>
                           <input id="ck4" type="checkbox" />
            <label for="ck4"></label>
                          <input id="ck5" type="checkbox" />
              <label for="ck5"></label>

           </div> --}}
         </div>
         
       </div>
         
       </div>
     {{-- <div class="section">
     <div class="section__title">
       Interests
       </div>
       <div class="section__list">
         <div class="section__list-item">
                  Football, programming.
          </div> --}}
       </div>
     </div>
     </div>
  </div>
</div>