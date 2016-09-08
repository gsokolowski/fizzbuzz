FizzBuzz
========

All tasks are done.


There was couple of little bugs on the setup

Database structure - table articles was missing foreign key section_id
New schema is updated in db/versions/1/schema.sgl

Other bug was in SectionRepository.php
method findAll()
PDO was fetching only one row instead of all

return $stmt->fetchAll(\PDO::FETCH_ASSOC);
//return $stmt->fetch(\PDO::FETCH_ASSOC);

