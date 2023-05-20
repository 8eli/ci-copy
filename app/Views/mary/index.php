
<?= $this->extend('layouts/default'); ?>
<?= $this->section('title') ?><?= $title ?><?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="content">
   <a href="<?= base_url('new') ?>" class="btn btn-success">New</a>

   <div class="container-fluid py-5 mb-5">
      <div class="d-flex">
         <?php foreach ($artists as $artist) : ?>
            <div class="card" style="width: 18rem;">
               <img src="<?= $artist['img_url'] ?>" class="card-img-top" alt="...">
               <div class="card-body">
                  <h5 class="card-title"><?= $artist['name'] ?></h5>
                  <p class="card-text"><?= $artist['description'] ?></p>
                  <a href="<?= base_url("edit/$artist[id]") ?>" class="btn btn-primary">Edit</a>
                  <a href="<?= base_url("delete/$artist[id]") ?>" class="btn btn-danger">Delete</a>
               </div>
            </div>
         <?php endforeach ?>
      </div>
   </div>
</div>

<section class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-white text-center my-5">BIGBANG MEMBERS</h2>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-4">
        <div class="shadow
        d-flex
        justify-content-center
        align-items-center p-3 bg-dark rounded-lg
        flex-column
       ">
          <div class="person-img">
            <img src="public/asset/image/gd.jpg" class="img-fluid rounded-circle" alt="GDragon">
          </div>
          <div class="person-name my-2">
            <h3 class="text-white">GDragon</h3>
          </div>
          <div class="info">
            <h6 class="text-white">Leader/rapper</h6>
          </div>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
           Know More
        </button>
        </div>
      </div>

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">All About G-dragon</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
        Stage Name: G-Dragon (지드래곤)
          Birth Name: Kwon Ji Yong (권지용)
          Birthday: August 18, 1988
          Zodiac Sign: Leo
          Height: 177 cm (5’10”)
          Weight: 58 kg (128 lbs)
          Blood Type: A
          Instagram: @xxxibgdrgn
          Twitter: @ibgdrgn
          Facebook: gdragon
           He was born in Seoul, South Korea.
 He has a sister, named Kwon Dami.
 He is a childhood friend of T.O.P and Kangin from Super Junior.
 At age of 7 he became a member of “Little Roora”.
 When he was around 8 years old he became a S.M. Entertainment trainee.
 At age of 12 he became an YGE trainee.
 Since he was 12 he trained along with another BigBang member, Taeyang.
 JunK of 2PM was GD’s best friend when he was a trainee.
 Initially, Taeyang and G-DRAGON prepared six years to debut as a hip-hop duo, GDYB, but the plan changed and 3 more members have been added.
 GD is extremely shy and modest in real life.
 One of his nicknames is “Iguana Idol” because he changes his hair color several times.
 G-Dragon can speak English.
 In 2009 he released his first solo album “Heartbreaker“.
 He is the main composer and producer of the group.
 He is the Kpop idol who earns the most song royalties (for his self composed songs).
 G-Dragon’s lucky number is 8.
 His official height is 177 cm (around 5’10”), but his rumored height is around 168-169 cm (5’6.1″).
 He is considered the King of K-Pop.
 Enlisted on February 27th, 2018. He returned on October 28th, 2019.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



      <div class="col-lg-3 col-md-4 col-sm-3">
        <div class="shadow
        d-flex
        justify-content-center
        align-items-center p-3 bg-dark rounded-lg
        flex-column
      ">
          <div class="person-img">
            <img src="public/asset/image/Daesung.jpg" class="img-fluid rounded-circle" alt="Daesung">
          </div>
          <div class="person-name my-2">
            <h3 class="text-white">Daesung</h3>
          </div>
          <div class="info">
            <h6 class="text-white">Vocalist</h6>
          </div>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
           Know More
          </button>
        </div>
      </div>
      <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">All About Daesung</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
          Stage Name: DAESUNG (대성)
          Birth Name: Kang Daesung (강대성)
          Birthday: April 26, 1989
          Zodiac Sign: Taurus
          Height: 178 cm (5’10”)
          Weight: 63 kg (139 lbs)
          Blood Type: O
          Me2day: @bbdaesung
          Born in Incheon, South Korea.
          He has an older sister, named Bora.
          One of his nicknames is “Smiling Angel”.
          He was the third picked member of BIGBANG.
          He is close friends with Gummy.
          DAESUNG loves “Doreamon”.
          He doesn’t know how to swim.
          DAESUNG picked T.O.P as the member he would date if he was a girl.
          Enlisted on March 13th, 2018, he returned from the military on November 10th, 2019.
          On Dec.26, 2022, his contract with YG Ent. ended, and he decided to part ways with the agency.
          Despite his departure from the agency, he’s still a BIGBANG member.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


      <div class="col-lg-3 col-md-4 col-sm-3">
        <div class="shadow
        d-flex
        justify-content-center
        align-items-center p-3 bg-dark rounded-lg
        flex-column
      ">
          <div class="person-img">
            <img src="public/asset/image/rr.jpeg" class="img-fluid rounded-circle" alt="Seungri">
          </div>
          <div class="person-name my-2">
            <h3 class="text-white">Seungri</h3>
          </div>
          <div class="info">
            <h6 class="text-white">Vocalist</h6>
          </div>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
           Know More
          </button>
        </div>
      </div>
      <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">All About Seungri</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
        Stage Name: SEUNGRI (승리)
        Birth Name: Lee Seung Hyun (이승현)
        Position: Lead Dancer, Vocalist, Maknae
        Birthday: December 12, 1990
        Zodiac Sign: Sagittarius
        Birth Place: Gwangju, South Korea
        Height: 177 cm (5’10”)
        Weight: 60 kg (132 lbs)
        Blood Type: A
        Instagram: @seungriseyo
        Twitter: @ForvictoRi
        Me2day: @viofbb
        Born in Gwangju, South Korea.
        He has a younger sister, named Hanna.
        He studied at Chung-Ang University with SNSD‘s Yuri and Sooyoung.
        SEUNGRI is known for his blunt attitude and his overconfidence.
        He was originally eliminated from BIGBANG. He competed against SO–1 (aka Hyunsung from B2ST) to be the final member. In the end, SEUNGRI won.
        When a fan asked Seungri to rank the member based on the looks he said he’s on the 3rd, so he’s not ugly nor handsome. (Ask In A Box)
        He has choreographed a large portion of BIGBANG‘s dances.
        He has his own dance academy, “Seungri’s Academy”.
        SEUNGRI has his own ramen store.
        He is the CEO of YGX (a subsidiary company of YG Ent). (Idol Room ep. from vLive)
        He became investigated by police for allegedly mediating escort and prostitution services to foreign investors in 2015.
        He has been also accused of being part of a chatroom where Jung Joon Young (Drug Restaurant) shared illegally taken videos of women and he is accused of habitual gambling in Las Vegas.
        On March 11, 2019, SEUNGRI announced his retirement from the Entertainment industry.
        On March 13, 2019, YG officially terminated his contract upon SEUNGRI‘s request.
        On January 31, 2020 he was indicted without detention for allegedly organizing prostitution, habitual gambling, and illegal foreign currency trade.
        Enlisted in the military on March 9, 2020 at the 6th Infantry Recruit Training Center in Cheorwon County, Gangwon Province.
      </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


      <div class="col-lg-3 col-md-4 col-sm-3">
        <div class="shadow
        d-flex
        justify-content-center
        align-items-center p-3 bg-dark rounded-lg
        flex-column
      ">
          <div class="person-img">
            <img src="public/asset/image/taeyang.jpg" class="img-fluid rounded-circle" alt="Taeyang">
          </div>
          <div class="person-name my-2">
            <h3 class="text-white">Taeyang</h3>
          </div>
          <div class="info">
            <h6 class="text-white">Vocalist</h6>
          </div>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal4">
           Know More
          </button>
        </div>
      </div>
      <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">All About Taeyang</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
      Stage Name: TAEYANG (태양)
      Birth Name: Dong Yong Bae (동영배)
      Birthday: May 18, 1988
      Zodiac Sign: Taurus
      Birth Place: Uijeongbu, Gyeonggi-do, South Korea
      Height: 174 cm (5’9″)
      Weight: 56 kg (123 lbs)
      Blood Type: B
      Twitter: @Realtaeyang
      Me2day: @solofbb
      Instagram: @__youngbae__
      He was born in Ujeongbu, Gyeonggi-do, South Korea.
      He has older brother, actor Dong Hyun-bae.
      His stage name Taeyang means Sun.
      He can play the piano.
      He can speak English, Japanese, and Korean.
      He has know GD since he was 12, since they were training together.
      Initially, Taeyang and G-DRAGON prepared six years to debut as a hip-hop duo, GDYB, but the plan changed and 3 more members was added.
      His first kiss was in the MV for his first solo single “My Girl“.
      If he was a girl, he would date Daesung.
      Once he went on a blind date with Girls’ Generation’s Yuri. They remained friends. (According to BIGBANG fan page on Facebook)
      In 2013, he began dating actress Jung Eunran, better known by her stage name Min Hyorin.
      TaeYang is known for his impressive vocal abilities, he was actually trained to be a rapper but debuted in BIGBANG as a singer.
      Taeyang and Min Hyorin married on February 3, 2018, before his enlistment.
      Enlisted on March 12th, 2018, he returned on November 10th, 2019.
      He’s ranked 41st on TC Candler “The 100 Most Handsome Faces of 2018”.
      In November 2021, Taeyang and Hyorin welcomed their first child, a baby boy. (Source)
      As of Dec.26, 2022, he’s under the label THEBLACKLABEL.
    </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

      <div class="col-lg-3 col-md-4 col-sm-3">
        <div class="shadow
        d-flex
        justify-content-center
        align-items-center p-3 bg-dark rounded-lg
        flex-column
      ">
          <div class="person-img">
            <img src="public/asset/image/Top.jpg" class="img-fluid rounded-circle" alt="Top">
          </div>
          <div class="person-name my-2">
            <h3 class="text-white">T.O.P</h3>
          </div>
          <div class="info">
            <h6 class="text-white">Rapper</h6>
          </div>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal5">
           Know More
          </button>
        </div>
      </div>
    </div>
    <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">All About T.O.P</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
        Stage Name: T.O.P (탑)
        Birth Name: Choi Seung-hyun (최승현)
        Position: Lead Rapper, Vocalist, Visual
        Birthday: November 4, 1987
        Zodiac Sign: Scorpio
        Birth Place: Seoul, South Korea
        Height: 181 cm (5’11”)
        Weight: 65 kg (143 lbs)
        Blood Type: B
        Me2day Account: @topofbb
        Instagram: @choi_seung_hyun_tttop
        He was born in Seoul, South Korea.
        He has an older sister, named Choi Hye Yoon.
        He is a childhood friend of G-Dragon.
        He was first rejected by YG because they said he was too overweight to be an idol. So he went home and lost 20 kg in 40 days.
        He, along with GD, are part of the sub unit GD&TOP.
        His favorite color is pink.
        He is the jokester in the group.
        When he was a child, he was friends with the figure skater Kim Yuna.
        He said he would date Taeyang if he was a girl.
        T.O.P enlisted on February 9, 2017, he returned on July 6th 2019.
      </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>

  </section>
  <?= $this->endSection() ?> 