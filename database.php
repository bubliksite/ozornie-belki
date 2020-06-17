<?php 

	class Attraction {
		public $name;
		public $title;
		public $description;
		

		public function __construct($_name, $_title, $_description) {
			$this->name = $_name;
			$this->title = $_title;
			$this->description = $_description;
		}
	}

	$attractions = array();

	$attractions[0] = new Attraction(
		'Park-1', 
		'Наши аттракционы', 
		'Озорные Белки – это 30 увлекательных и веселых природных аттракционов для активных детей и родителей: веревочный парк на дубах, тарзанки, батуты, всесезонные горки с ватрушками, качели, лабиринты, спортивные площадки'
	);

	$attractions[1] = new Attraction(
		'Attraction-1', 
		'Тарзанка Зов природы', 
		'Отличный способ проверить силу духа юных героев! Только самые храбрые справятся с канатами!'
	);

	$attractions[2] = new Attraction(
		'Attraction-2', 
		'Тарзанка Дикие лианы', 
		''
	);

	$attractions[3] = new Attraction(
		'Attraction-3', 
		'Туманная гора', 
		'Многоуровневые сеточные лабиринты для смельчаков! Вы забрались в самое логово паука, пути назад уже нет!'
	);

	$attractions[4] = new Attraction(
		'Attraction-4', 
		'Приют музыканта', 
		'У каждого домика на дереве есть свой секрет! Раскроете тайну этого домика и сможете сыграть на пианино и ксилофоне!'
	);

	$attractions[5] = new Attraction(
		'Attraction-1', 
		'Привал альпиниста', 
		'Домик на дереве и горка для тех, кто смог пройти туманную гору'
	);		

	$attractions[6] = new Attraction(
		'Attraction-1', 
		'Поляна хоббитов', 
		'Сказочные персонажи построили себе волшебный городок! С горками, переходами и пузатыми домиками! Хоббиты очень любят уют и всякие интересные вещи. Изучи все уголки и спуски. Может ты встретишь одного из жителей полянки?'
	);		

	$attractions[7] = new Attraction(
		'Attraction-1', 
		'Гонка героев', 
		'Для самых ловких! Полоса препятствий над землёй с индивидуальной непрерывной линией страховки. Канаты, бруски и бревна – для самых озорных гостей!'
	);		

	$attractions[8] = new Attraction(
		'Attraction-1', 
		'Перевал Восточный хребет', 
		'Ты можешь подняться на самую высокую точку парка и попасть на смотровую площадку – высота 7 метров!'
	);		

	$attractions[9] = new Attraction(
		'Attraction-1', 
		'Эльфийская деревня', 
		'Переходы-препятствия, спуски и лабиринты! Все это ждет вас в нашей деревне домиков, а между деревьями спрятались эльфы. Сможешь ли ты их найти? Почувствуй себя настоящим лесным героем!'
	);		

	$attractions[10] = new Attraction(
		'Attraction-1', 
		'Горка, ватрушки', 
		''
	);		

	$attractions[11] = new Attraction(
		'Attraction-1', 
		'Нора белого кролика', 
		'Подземный крытый лабиринт'
	);		

	$attractions[12] = new Attraction(
		'Attraction-1', 
		'Сеточное море', 
		'Знакомые и любимые всеми с детства сеточные батуты натянуты прямо между деревьями!'
	);		

	$attractions[13] = new Attraction(
		'Attraction-1', 
		'Качели Выше ели', 
		'Качели-гнездо – уникальный аттракцион на замену привычным нам качелям!'
	);		

	$attractions[14] = new Attraction(
		'Attraction-1', 
		'Качели змейка', 
		''
	);		

	$attractions[15] = new Attraction(
		'Attraction-1', 
		'Фитнес аллея', 
		''
	);		

	$attractions[16] = new Attraction(
		'Attraction-1', 
		'Диско-гольф', 
		''
	);		

	$attractions[17] = new Attraction(
		'Attraction-1', 
		'Страна воображения', 
		'Волшебный мир! Никаких границ, бесконечный полет фантазии! Создавай самые необычные фигуры и строения!'
	);		

	$attractions[18] = new Attraction(
		'Attraction-1', 
		'Школа юных строителей', 
		'Самая большая песочница с грузовыми машинами, самосвалами и мягким песком.'
	);		

	$attractions[19] = new Attraction(
		'Attraction-1', 
		'Школа маленьких строителей', 
		'В самом центре нашего парка скрыта большая песочница! Мягкий песок, большие машины и много развлечений внутри.'
	);		

	$attractions[20] = new Attraction(
		'Attraction-1', 
		'Грязелебница', 
		'Большая песочница с прямым подводом воды для самых интересных фигур из песка!'
	);		

	$attractions[21] = new Attraction(
		'Attraction-1', 
		'Снукбол', 
		'Надувной бильярд футбольными шарами.'
	);		

	$attractions[22] = new Attraction(
		'Attraction-1', 
		'Детский надувной батут Озорные белки', 
		'Весёлые бельчата бодры и радостны! Прыгай вместе с ними!'
	);		

	$attractions[23] = new Attraction(
		'Attraction-1', 
		'Воздушный баскетбол', 
		'Максимально безопасные натяжные сетчатые батуты'
	);		

	$attractions[24] = new Attraction(
		'Attraction-1', 
		'Долина танцующих сурков', 
		'Прыжки, кувырки! Танцы и веселье на батутах!'
	);		

	$attractions[25] = new Attraction(
		'Attraction-1', 
		'Катушки Перекати-поле', 
		'Катушки – это большие роллеры, перемещаться внутри которых нужно буквально “как белка в колесе”.'
	);

	$attractions[26] = new Attraction(
		'Attraction-1', 
		'Батут Лесная перина ', 
		'Большой надувной батут для самых веселых!'
	);

	$attractions[27] = new Attraction(
		'Attraction-1', 
		'Теннисный корт', 
		''
	);

	$attractions[28] = new Attraction(
		'Attraction-1', 
		'Футбольное поле', 
		''
	);

	$attractions[29] = new Attraction(
		'Attraction-1', 
		'Танкодром', 
		'Настоящий танковый бой под открытым небом на специальном танкодроме. Уникальный, единственный в России аттракцион!'
	);

	$attractions[30] = new Attraction(
		'Attraction-1', 
		'Призовые аркадные игры', 
		'Игры для самых ловких и быстрых! Озорничай и выигрывай ценные и памятные призы.'
	);
	class Animal {
		public $image;
		public $title;
		public $description;

		public function __construct($_image, $_title, $_description) {
			$this->image = $_image;
			$this->title = $_title;
			$this->description = $_description;
		}
	}

	$animals = array();

	$animals[0] = new Animal(
		'Animal-2',
		'',
		'В парке на мини-ферме живут: альпака, англо-нубийские козочки, овечки керри-хилл, еноты-полоскуны, кролики, белочки, павлины, фазаны, курочки и утки-мандаринки… 
		И все они любят ваших селфи :)'
	);
	$animals[1] = new Animal(
		'Animal-4',
		'Тексты предоставит позже заказчик',
		''
	);


	class Image {
		public $category;
		public $picture;
		public $thumbnail;

		public function __construct($_category, $_picture, $_thumbnail) {
			$this->category = $_category;
			$this->picture = $_picture;
			$this->thumbnail = $_thumbnail;
		}
	}

	$allImages = array();

	$allImages[0] = new Image(
		'Park',
		'Park-1',
		'Park-1-420'
	);

	$allImages[1] = new Image(
		'Park',
		'Park-2',
		'Park-2-420'
	);

	$allImages[2] = new Image(
		'Park',
		'Park-3',
		'Park-3-420'
	);

	$allImages[3] = new Image(
		'Park',
		'Park-4',
		'Park-4-420'
	);

	$allImages[4] = new Image(
		'Attraction',
		'Attraction-1',
		'Attraction-1-420'
	);

	$allImages[5] = new Image(
		'Attraction',
		'Attraction-2',
		'Attraction-2-420'
	);

	$allImages[6] = new Image(
		'Attraction',
		'Attraction-3',
		'Attraction-3-420'
	);

	$allImages[7] = new Image(
		'Attraction',
		'Attraction-4',
		'Attraction-4-420'
	);

	$allImages[8] = new Image(
		'Animal',
		'Animal-1',
		'Animal-1-420'
	);

	$allImages[9] = new Image(
		'Animal',
		'Animal-2',
		'Animal-2-420'
	);

	$allImages[10] = new Image(
		'Animal',
		'Animal-3',
		'Animal-3-420'
	);

	$allImages[11] = new Image(
		'Animal',
		'Animal-4',
		'Animal-4-420'
	);

?>