<?php
  /* Question Fixture generated on: 2010-11-20 03:11:27 : 1290194727 */
class QuestionFixture extends CakeTestFixture {
  var $name = 'Question';

  var $fields = array(
		      'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		      'title' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		      'body' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		      'status' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 1),
		      'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		      'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		      'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		      'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
		      );

  var $records = array(
		       array(
			     'id' => 1,
			     'title' => 'Question 1',
			     'body' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			     'status' => 1,
			     'created' => '2010-11-10 03:25:27',
			     'modified' => '2010-11-10 03:25:27'
			     ),

		       array(
			     'id' => 2,
			     'title' => 'Question 2',
			     'body' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			     'status' => 1,
			     'created' => '2010-11-10 03:25:27',
			     'modified' => '2010-11-10 03:25:27'
			     ),

		       array(
			     'id' => 3,
			     'title' => 'Question 3',
			     'body' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			     'status' => 1,
			     'created' => '2010-11-14 03:25:27',
			     'modified' => '2010-11-14 03:25:27'
			     ),
		       array(
			     'id' => 4,
			     'title' => 'Question 4',
			     'body' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			     'status' => 1,
			     'created' => '2010-11-15 03:25:27',
			     'modified' => '2010-11-15 03:25:27'
			     ),
		       array(
			     'id' => 5,
			     'title' => 'Question 5',
			     'body' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			     'status' => 1,
			     'created' => '2010-11-16 03:25:27',
			     'modified' => '2010-11-16 03:25:27'
			     ),

		       array(
			     'id' => 6,
			     'title' => 'Question 6',
			     'body' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			     'status' => 1,
			     'created' => '2010-11-16 03:25:27',
			     'modified' => '2010-11-16 03:25:27'
			     ),

		       array(
			     'id' => 7,
			     'title' => 'Question 7',
			     'body' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			     'status' => 1,
			     'created' => '2010-11-17 03:25:27',
			     'modified' => '2010-11-17 03:25:27'
			     ),

		       array(
			     'id' => 8,
			     'title' => 'Question 6',
			     'body' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			     'status' => 1,
			     'created' => '2010-11-19 03:25:27',
			     'modified' => '2010-11-19 03:25:27'
			     ),
		       array(
			     'id' => 9,
			     'title' => 'Question 9',
			     'body' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			     'status' => 1,
			     'created' => '2010-11-19 03:25:27',
			     'modified' => '2010-11-19 03:25:27'
			     ),
		       array(
			     'id' => 10,
			     'title' => 'Question 10',
			     'body' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			     'status' => 1,
			     'created' => '2010-11-20 03:25:27',
			     'modified' => '2010-11-20 03:25:27'
			     ),


		       );
  }
?>