@extends('layouts.main-theme')

@section('content')

    <!--? Hero Start -->
    <div class="slider-area">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>Blog Page</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!------ Include the above in your HEAD tag ---------->

    <div class="index-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">

                </div>
                <a href="#" data-toggle="modal" data-target="#exampleModalCenter">
                    <div class="col-lg-4">
                        <div class="card">
                            <img src="{{asset('assets/img/services/43.jpg')}}">
                            <h4> FOOD INSECURITY</h4>
                            <p>Food Insecurity is the state of being unable to afford
                                sufficient quantity of affordable or nutritious food........
                            </p>
                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="blue-button">Read More</a>
                        </div>
                    </div>
                </a>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">FOOD INSECURITY</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- <h4>Blog</h4> -->
                                <p align="justify">Food Insecurity is the state of being unable to afford
                                    sufficient quantity of affordable or nutritious food.
                                </p>

                                <p align="justify">#HIDDENPOVERTY <br>
                                    “Food is a basic human right. In a 3rd world country like Kenya no one
                                    should be deprived of the ability to feed themselves.” Pondi Collins
                                    Co-Founder of Pomilly East African Limited (PEAL)
                                </p>

                                <p align="justify">With no poverty line and minimum wage in Kenya it can be
                                    challenging to measure and identify people who struggle to make ends
                                    meet and require the most basic needs like food and shelter.

                                </p>

                                <p align="justify">
                                    FOOD INSECURITY RESEARCH <br>
                                    In 2018, Lien Centre published a report <a style="color: blue;"
                                                                               href="https://lcsi.smu.edu.sg/research/understanding-food-insecurity-Singapore">
                                        “Hunger in a Food Lover’s Paradise” </a> that provided a deeper
                                    understanding of the food insecurity situation in Singapore.
                                </p>

                                <p align="justify">Through interviews with food support organisations and
                                    households, this study provides insights on questions such as:
                                </p>

                                <p align="justify">Who among Kenyans is experiencing food insecurity <br>
                                    How are the existing food support systems meeting these needs <br>
                                    What are the gaps in service provision <br>
                                    The report also makes recommendations on how these gaps might be filled
                                    for a smoother and targeted food support distribution system. <br>
                                    In 2019, PEAL-Kenya decided to probe deeper into the topic of food
                                    insecurity.
                                </p>

                                <p align="justify">This nationally representative study concluded that about
                                    70% of Kenyans households experienced food insecurity at
                                    least once in the last 12 months. Being food insecure can also be
                                    associated to having negative effects on a person’s physical and mental
                                    health.
                                </p>

                                <p align="justify">Read more on these issues in the report here.
                                </p>

                                <p align="justify">Take Action today to end food insecurity by feeding a
                                    household in need!
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" data-toggle="modal" data-target="#exampleModalCenter1">
                    <div class="col-lg-4" style="margin-top: 10px;">
                        <div class="card">
                            <img src="{{asset('assets/img/services/44.jpg')}}">
                            <h4>FOOD SECURITY</h4>
                            <p>In Kenya it’s common to find a grocery store, convenience store, or even a farmers’ market in your area.
                                How often have you visited,  ...... </p>
                            <a href="#" class="blue-button">Read More</a>
                        </div>
                    </div>
                </a>
                <div class="col-lg-2">

                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">FOOD INSECURITY</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p align="justify">
                                    <span style="font-weight: 600;">What is Food Security?</span> <br>
                                    In Kenya it’s common to find a grocery store, convenience store, or even a farmers’ market in your area.
                                    How often have you visited, pushed a cart around, and seen the variety of available food on the shelves?
                                    Maybe you’ve selected the best fruits and vegetables from the stacks or picked your favourite meat and
                                    dairy products from the refrigerated displays. But have you ever stopped to think about how it got there?
                                    dairy products from the refrigerated displays. But have you ever stopped to think about how it got there?
                                    dairy products from the refrigerated displays. But have you ever stopped to think about how it got there?
                                </p>
                                <p align="justify">
                                    Food goes through a cycle from production to waste management, and every step along the way we must be
                                    Food goes through a cycle from production to waste management, and every step along the way we must be
                                    Food goes through a cycle from production to waste management, and every step along the way we must be
                                    thinking of ways to ensure that food is available, accessible, affordable, nutritious, and stable for
                                    thinking of ways to ensure that food is available, accessible, affordable, nutritious, and stable for
                                    thinking of ways to ensure that food is available, accessible, affordable, nutritious, and stable for
                                    all people. When these five basic elements are not met, food insecurity can occur. In Kenya,3 in ten
                                    all people. When these five basic elements are not met, food insecurity can occur. In Kenya,3 in ten
                                    all people. When these five basic elements are not met, food insecurity can occur. In Kenya,3 in ten
                                    households and one in six children were food insecure between 2017 and 2018. Globally, the situation is
                                    households and one in six children were food insecure between 2017 and 2018. Globally, the situation is
                                    households and one in six children were food insecure between 2017 and 2018. Globally, the situation is
                                    even more critical, with nearly 690 million people who are hungry and 750 million who are exposed to severe
                                    even more critical, with nearly 690 million people who are hungry and 750 million who are exposed to severe
                                    even more critical, with nearly 690 million people who are hungry and 750 million who are exposed to severe
                                    levels of food insecurity. Achieving the five elements of food security, in all stages of the food cycle, is
                                    vital to the goal of eliminating hunger and malnutrition worldwide.
                                    vital to the goal of eliminating hunger and malnutrition worldwide.
                                    vital to the goal of eliminating hunger and malnutrition worldwide.
                                </p>
                                <p align="justify">
                                    <span style="font-weight: 600;">Production</span> <br>
                                    Most people do not grow or raise their own food, which means they rely on farmers to produce the food they find on
                                    Most people do not grow or raise their own food, which means they rely on farmers to produce the food they find on
                                    Most people do not grow or raise their own food, which means they rely on farmers to produce the food they find on
                                    their retail shelves. With the high demand of a growing population, the development of crops that are more resilient
                                    to weather, disease, and pests are important to keeping food available to the population. New innovations, such as
                                    temperature-controlled grain silos, global positioning systems, and drip irrigation, help preserve environmental
                                    temperature-controlled grain silos, global positioning systems, and drip irrigation, help preserve environmental
                                    temperature-controlled grain silos, global positioning systems, and drip irrigation, help preserve environmental
                                    resources like water and land. They also reserve food stores for longer periods of time. The developments of more
                                    accurate farming techniques keep food available and sustainable, allowing an increase in crop growth and a decrease
                                    in land, water, and nutrient usage.
                                </p>
                                <p align="justify">
                                    <span style="font-weight: 600;">Manufacturing</span> <br>
                                    Food needs to be processed and packaged for transportation to retailers. This step of the food cycle has the highest level of waste in the developed world at 43 per cent.  Evolving to reduce this percentage while keeping food from degradation during the process is an ongoing challenge. This requires new, more efficient processing technologies and the recovery of food by-products . The use of recycled, edible, or biodegradable packaging also helps to protect the environment and create a more sustainable food-processing system.
                                    Food needs to be processed and packaged for transportation to retailers. This step of the food cycle has the highest level of waste in the developed world at 43 per cent.  Evolving to reduce this percentage while keeping food from degradation during the process is an ongoing challenge. This requires new, more efficient processing technologies and the recovery of food by-products . The use of recycled, edible, or biodegradable packaging also helps to protect the environment and create a more sustainable food-processing system.
                                    Food needs to be processed and packaged for transportation to retailers. This step of the food cycle has the highest level of waste in the developed world at 43 per cent.  Evolving to reduce this percentage while keeping food from degradation during the process is an ongoing challenge. This requires new, more efficient processing technologies and the recovery of food by-products . The use of recycled, edible, or biodegradable packaging also helps to protect the environment and create a more sustainable food-processing system.
                                </p>
                                <p align="justify">
                                    <span style="font-weight: 600;">Distributing</span> <br>
                                    Transportation ensures that food makes it from farms and manufacturers to retailers, such as grocery stores. Shortening the distance food needs to travel by supporting local production reduces emissions and creates a more sustainable system. However, to ensure the availability of food in all circumstances, it is essential to have transportation plans in place for instances when local food production faces challenges. Access to produce from foreign climates also provides a greater variety of nutritious and culturally diverse food.
                                </p>
                                <p align="justify">
                                    <span style="font-weight: 600;">Retail</span> <br>
                                    Supermarkets, convenience stores, independent grocers, and farmers’ markets are all examples of retailers that sell food. People rely on these businesses to provide them access to the food they need, and having diverse, affordable options within reach is a vital aspect of food security. Sustainable practices can also be implemented at a retail level, by reducing amounts of plastic and food waste. Encouraging the use of reusable grocery bags, donating near-expired products, and even composting at a store level can help achieve this.
                                </p>
                                <p align="justify">
                                    <span style="font-weight: 600;">Consumption</span> <br>
                                    Food is a requirement of life, but the type of food consumed matters. Proper nourishment means having strong bodies and sharp minds. Nutrition education and access to healthy choices is vital to supplying us with the daily needs necessary to support a healthy lifestyle. Religious, medical, and ethical factors are also important. Enough options need to be available for those with dietary restrictions. Likewise, for quality of life, people should have choice and access to food they enjoy. What’s common to eat in one country
                                    might not be common in another.For instance, insects are not as widely as consumed in Kenya as they are in other countries.
                                </p>
                                <p align="justify">
                                    <span style="font-weight: 600;">Waste Management</span> <br>
                                    Food that isn't consumed is disposed off through waste management  systems.Compost is one way that organic waste can be  managed in a suitable way, using old food to fertilize new production, however food security aims to limit foodwastes in areas of abundance surpluses to areas where Hunger is still a concern.
                                    <!-- Download pdf  -->
                                    <a style="color: green; font-weight: 600;" class="" href="{{asset('assets/What is Food security.pdf')}}" download>
                                        Download pdf
                                    </a>
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



@endsection
