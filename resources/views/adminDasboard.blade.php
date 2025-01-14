<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <meta translate="false">
    <title>admin Dasboard</title>
    <x-headvite />
</head>

<body class="bg-base-200"
      x-data="{
          doc: {
              mainbox: $refs.mainbox,
          }
      }">
    <div class="sticky z-[999] top-0  w-full px-4 py-0 border-b border-gray-200 min-h-12 navbar bg-base-300">
        <div class="flex-none">
            <label class="btn btn-square btn-sm swap swap-rotate">
                <!-- this hidden checkbox controls the state -->
                <input type="checkbox"
                       x-init="$el.onchange = () => {
                           doc.mainbox.style.gridTemplateColumns = $el.checked ? '0rem 1fr' : '20rem 1fr';
                       }" />

                <!-- hamburger icon -->
                <svg class="fill-current swap-on"
                     xmlns="http://www.w3.org/2000/svg"
                     width="28"
                     height="28"
                     viewBox="0 0 512 512">
                    <path d="M64,384H448V341.33H64Zm0-106.67H448V234.67H64ZM64,128v42.67H448V128Z" />
                </svg>

                <!-- close icon -->
                <svg class="fill-current swap-off"
                     xmlns="http://www.w3.org/2000/svg"
                     width="28"
                     height="28"
                     viewBox="0 0 512 512">
                    <polygon
                             points="400 145.49 366.51 112 256 222.51 145.49 112 112 145.49 222.51 256 112 366.51 145.49 400 256 289.49 366.51 400 400 366.51 289.49 256 400 145.49" />
                </svg>
            </label>
        </div>
        <div class="flex-1">

            <div class="mx-2 text-sm breadcrumbs">
                <ul>
                    <li><a>Home</a></li>
                    <li><a>Documents</a></li>
                    <li>Add Document</li>
                </ul>
            </div>
        </div>

    </div>
    <div class="w-full  grid grid-cols-[20rem,1fr] transition-all relative"
         x-ref="mainbox">
        <div class="bg-white sticky top-[3rem] overflow-hidden h-[calc(100vh_-_3rem)] col-span-1 z-20 ">
            navigasi
        </div>
        <div class="absolute left-0 z-10 col-span-1 bg-gray-500 sm:relative">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et voluptate molestias in expedita iusto vitae
            maiores cum veritatis alias earum, nisi nulla dolor enim facilis necessitatibus laudantium. Odit itaque
            omnis possimus consectetur totam, mollitia, labore doloribus laborum, magni dolorum et impedit tempora
            quisquam non! Quis provident unde praesentium illo aliquid?Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Placeat perspiciatis excepturi in eum deserunt illum voluptatem qui maiores odio
            doloremque rerum reiciendis totam quod enim, blanditiis atque! Ex omnis velit maxime labore delectus quasi
            nemo deleniti explicabo minus quibusdam laboriosam earum numquam ipsum magni aperiam, beatae distinctio aut
            rem tenetur impedit? Dignissimos veniam laborum iure vel odio itaque perspiciatis vero odit sequi modi
            voluptate recusandae praesentium dolores, soluta atque nesciunt quaerat obcaecati hic doloremque, suscipit
            dolor quisquam. Doloremque perspiciatis at veritatis, autem rerum porro? Minus laborum praesentium rem,
            ducimus cumque maxime illum nesciunt ex dolorum dolore nulla obcaecati natus provident magnam animi numquam!
            Rem suscipit soluta quidem id sapiente nam consequuntur aliquam corrupti enim veritatis nesciunt, quod, nemo
            illo ipsa commodi nobis dolores, nostrum expedita maiores et? Maxime, quae quam. Excepturi dolorem amet enim
            nisi nesciunt molestias laborum delectus ipsam voluptate dolorum explicabo nulla, recusandae accusantium
            placeat expedita voluptates laudantium id? Sit blanditiis quasi debitis error quod, doloremque amet illum
            accusantium inventore sed a optio animi, corrupti aut veniam perferendis saepe ad rerum magnam assumenda
            autem, delectus iusto eius cumque. Sunt earum assumenda blanditiis porro suscipit ullam dignissimos
            asperiores illum. Maxime nisi, id similique laborum accusantium doloremque porro aspernatur dolorum. Lorem
            ipsum dolor sit amet consectetur adipisicing elit. Omnis expedita, quam temporibus, debitis doloribus magnam
            rerum deserunt blanditiis quaerat quasi error voluptatem voluptate explicabo inventore earum sequi, cumque
            totam repudiandae sed non unde aut numquam commodi! Temporibus ex voluptatem error iusto repellendus numquam
            doloremque saepe quibusdam fugit nisi, veniam praesentium accusamus nemo reiciendis! Minus qui, labore
            reprehenderit repellat fugit aliquam recusandae ullam blanditiis ea sapiente illo, aperiam modi illum
            consequatur corporis expedita incidunt voluptas quam earum eum voluptatum doloremque debitis molestias
            culpa. Distinctio, nisi doloribus, porro facere aliquid, a molestiae asperiores nam soluta odit magnam
            dignissimos rerum cumque necessitatibus quos ut officiis perspiciatis natus ipsam ab. Magni, voluptas
            similique culpa illum, pariatur eum vitae temporibus nobis voluptatum consequatur quia non nihil quidem
            officia sapiente obcaecati in, alias fugit minus aut ipsa neque. Beatae ut molestias totam illo in sapiente,
            dolorum quasi similique quae. Alias consectetur molestiae modi atque assumenda doloribus voluptates maiores
            doloremque deserunt tempora, vitae ipsa quisquam, quae dignissimos eum ad minus aspernatur eos cum at.
            Molestiae ex vero sequi incidunt porro sapiente atque libero. Consequatur, eum ipsam aliquid laudantium
            rerum deleniti voluptas dignissimos? Laudantium consectetur dicta iusto ratione exercitationem expedita quos
            amet accusamus optio a atque voluptatibus nemo quod, ipsam provident voluptatem eius odio? Incidunt animi
            mollitia consectetur non fuga ab autem, pariatur odit temporibus nobis fugiat corporis beatae iste error
            explicabo illo reiciendis. Ex harum amet perferendis ipsum eum. Sapiente repellat quidem quaerat aut
            consequatur qui explicabo harum expedita, quam soluta laboriosam magnam excepturi modi itaque earum
            reprehenderit fugiat dolorem non voluptatem provident iusto, culpa impedit. Quibusdam et atque molestias
            quam quaerat autem pariatur fugit aliquam ullam quas sequi consequatur veritatis accusamus esse, porro eius,
            excepturi maiores animi. Quasi sequi laborum qui beatae magnam ut debitis, voluptas vero, laboriosam natus
            voluptatibus nulla, provident ullam totam! Nemo impedit officiis nostrum culpa eveniet, perspiciatis quia
            asperiores, nisi reprehenderit tempora deserunt illo cumque nihil. Culpa voluptatibus obcaecati vero illo
            delectus eius sed quaerat veritatis doloremque cum blanditiis totam accusamus, dicta hic placeat tempore
            alias, quis natus. Voluptates architecto ut recusandae doloremque. Tenetur ex in inventore cum cupiditate
            illum, officia veniam minima assumenda atque ratione, esse sunt porro optio voluptate error quidem saepe
            numquam similique est enim debitis. Alias eveniet quis blanditiis iusto nobis eius eos veritatis minima et
            culpa debitis molestias voluptate dolorem quaerat nesciunt delectus nam sit quidem cupiditate consectetur
            nisi commodi, accusamus deserunt iste? Ipsum quam iusto distinctio nemo sunt sequi doloremque earum dolorem
            libero quo iure recusandae perspiciatis sapiente, cupiditate quibusdam, vero id rerum esse. Officia magnam
            numquam sint odit ullam non consequatur molestias id rem iusto deserunt distinctio eligendi natus error
            repellendus facilis alias, iure saepe sequi odio, atque tempora? Vero accusantium amet debitis ipsa tenetur
            harum eligendi quod aperiam illo! Eum impedit ea soluta excepturi aspernatur modi itaque dicta, facere ex
            tempore corporis dolore corrupti praesentium, quod culpa? Adipisci sed dolor tempore consectetur fuga esse
            cupiditate doloribus mollitia dignissimos sint! Tempora iste omnis culpa animi, doloremque praesentium nihil
            possimus eligendi, enim quia quos mollitia voluptatem in sit vel soluta eveniet! Omnis itaque libero, quasi
            quibusdam perferendis eligendi corrupti quaerat veniam numquam repudiandae suscipit aperiam quia dolor
            possimus ut! Aperiam mollitia omnis soluta quae non consectetur dolorum, nemo repudiandae veritatis fugit
            hic vel tenetur, aliquam doloremque minima minus voluptatibus? Obcaecati minima ipsum rem sapiente odit
            adipisci similique asperiores perspiciatis architecto voluptate et, quasi itaque culpa quos placeat labore
            debitis suscipit nostrum consequatur velit necessitatibus. Quod aspernatur nemo esse accusantium maiores
            odit quidem voluptatem fugiat voluptas labore, magni accusamus illo autem consectetur amet vitae dolorem
            eveniet aliquam doloremque, ratione non est a. Quaerat suscipit voluptatum reiciendis inventore dolorem
            commodi culpa earum dicta. Odit quasi sequi perspiciatis impedit est aut? Magni, aut nesciunt accusamus modi
            ratione sit tempora deserunt excepturi fugit ipsa, ipsum ab! Nulla id soluta, est nobis aspernatur obcaecati
            maxime quibusdam tempora asperiores dolores? Modi error doloribus perspiciatis rerum perferendis at! Nobis
            voluptatibus sequi est corporis. Voluptas a earum autem animi maiores enim adipisci ut nobis exercitationem,
            magni nulla consequatur vero optio aperiam illum expedita mollitia delectus, maxime aut provident sint
            natus! Dolores animi quod labore blanditiis perferendis exercitationem nobis eveniet, cum deserunt ipsam
            suscipit hic, excepturi quia quasi autem dolore cumque. Fugit animi explicabo reprehenderit commodi
            similique cupiditate, odio, sunt deleniti veritatis eos quisquam! Dicta omnis consequatur provident quidem
            , consectetur officiis. Facilis enim nulla vero debitis minima tempora mollitia
            voluptas, et porro sunt suscipit perspiciatis, vitae id ipsum labore, voluptatum atque praesentium provident
            recusandae magni beatae sed neque fuga? Ea reiciendis asperiores porro eos repellat eligendi vitae, deserunt
            molestiae sint consectetur in magni, nam expedita delectus id cumque et! Suscipit nemo voluptate esse
            consequatur, expedita est magni eligendi atque ut tempora, cupiditate distinctio natus hic possimus earum
            omnis veniam, commodi magnam iste repellendus iusto ducimus sit dolore. Aliquid ducimus expedita molestias
            quibusdam cumque soluta fugiat numquam repudiandae, iure tempore sapiente dolores corporis! Deleniti
            temporibus vitae repellendus blanditiis magnam a maxime natus sapiente. Atque maxime iure magni, veniam ipsa
            eligendi suscipit, vel eveniet quos reprehenderit quisquam dignissimos placeat? Optio est quo, asperiores
            alias, non earum ex ut sint enim facilis facere dolores rem voluptate, ducimus quas eum quasi veniam cumque?
            Itaque temporibus, ducimus nostrum ipsam cupiditate fuga, tempore tenetur, minima consequuntur ipsum dicta
            asperiores blanditiis repudiandae iusto magnam nihil molestias quasi eum earum nulla perferendis quidem. Et
            asperiores necessitatibus quisquam provident rem nihil harum cupiditate consectetur! Similique quos atque
            harum, sunt qui debitis vel vero beatae aliquid ipsa doloribus culpa laudantium enim commodi sed illo
            officiis? Quam laudantium odit, atque mollitia numquam reprehenderit unde. Amet corporis illo doloribus
            nihil perferendis quidem consectetur veniam? Sit maiores ipsam accusantium sunt velit quaerat, placeat omnis
            molestias quia ab minus neque vel pariatur quam, eum assumenda, dolores aut nulla magnam. Sunt, nemo
            asperiores minus aliquam harum adipisci dolorum tempore eos, architecto illo expedita voluptates quia
            deleniti eveniet sequi. Excepturi, architecto eligendi adipisci reprehenderit quasi fugit tenetur quas
            voluptate nulla repudiandae placeat. Sunt beatae error quos blanditiis. Natus ipsa eveniet laborum obcaecati
            commodi provident, cum consectetur fugiat iste tenetur nihil.
        </div>
    </div>
</body>

</html>
