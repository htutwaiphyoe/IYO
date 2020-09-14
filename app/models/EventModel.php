<?php

class EventModel
{
    private $db;
    private $limit;
    private $start;
    private $query;

    public function __construct()
    {
        $this->db = new \app\libs\Db();
    }
    public function getAllPostsByCategoryId($catid)
    {
        $this->db->query("SELECT * FROM event WHERE category = :catid ORDER BY eventid DESC");
        $this->db->bind(":catid",$catid);

        return $this->db->multipleSet();
    }
    public function getAllPostsByCategoryLimitStart($catid,$start,$limit)
    {
        $query = "SELECT * FROM event WHERE category = :catid ORDER BY eventid DESC LIMIT ".$start.",".$limit."";
        $this->db->query($query);
        $this->db->bind(":catid",$catid);

        return $this->db->multipleSet();
    }
    public function getEventById($id)
    {
        $this->db->query("SELECT * FROM event WHERE eventid=:id");
        $this->db->bind(":id",$id);
        return $this->db->singleSet();
    }
    public function getEventByTitle($title)
    {
        $this->db->query("SELECT * FROM event WHERE title=:title");
        $this->db->bind(":title",$title);
        return $this->db->singleSet();
    }
    public function insertEvent($title,$description,$speaker,$eventtime,$content,$image)
    {
        $this->db->query("INSERT INTO event (title,speaker,eventtime,description,content,image) 
                               VALUES (:title,:speaker,:eventtime,:description,:content,:image)");
        $this->db->bind(":title",$title);
        $this->db->bind(":description",$description);
        $this->db->bind(":speaker",$speaker);
        $this->db->bind(":eventtime",$eventtime);
        $this->db->bind(":content",$content);
        $this->db->bind(":image",$image);
        return $this->db->execute();

    }
    public function updateEvent($eventid,$title,$description,$speaker,$eventtime,$content,$image)
    {
        $this->db->query("UPDATE event SET title=:title, description=:description,speaker=:speaker,eventtime=:eventtime,content=:content,image=:image
                        WHERE eventid=:eventid");
        $this->db->bind(":title",$title);
        $this->db->bind(":description",$description);
        $this->db->bind(":speaker",$speaker);
        $this->db->bind(":eventtime",$eventtime);
        $this->db->bind(":content",$content);
        $this->db->bind(":image",$image);
        $this->db->bind(":eventid",$eventid);
        return $this->db->execute();
    }
    public function deleteEvent($eventid)
    {
        $this->db->query("DELETE FROM event WHERE eventid=:eventid");
        $this->db->bind(":eventid",$eventid);
        return $this->db->execute();
    }
    public function getNotification($eventid,$title,$email)
    {
        $this->db->query("INSERT INTO notification (eventid,title,email) VALUES (:eventid,:title,:email)");
        $this->db->bind(":eventid",$eventid);
        $this->db->bind(":title",$title);
        $this->db->bind(":email",$email);
        return $this->db->execute();
    }
    public function getNotificationByUser($eventid,$email)
    {
        $this->db->query("SELECT * FROM notification WHERE eventid=:eventid AND email=:email");
        $this->db->bind(":eventid",$eventid);
        $this->db->bind(":email",$email);
        return $this->db->singleSet();
    }
    public function setLimit($limit)
    {
        $this->limit = $limit;
    }
    public function setStart($start)
    {
        $this->start = $start;
    }
    public function setQuery($query)
    {
        $this->query = $query;
    }

    public function getQuery()
    {
        return $this->query;
    }
    public function getLimit()
    {
        return $this->limit;
    }
    public function getStart()
    {
        return $this->start;
    }

}