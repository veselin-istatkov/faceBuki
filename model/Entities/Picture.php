<?php

/**
 *@Entity 
 *@Table(name="pictures") 
 */

class Picture {
    /**
     *@Id
     *@Column(name="picture_id",type="integer")
     *@GeneratedValue
     */
    private $pictureId;
    /**
     *@Column(name="caption",type="string",length=50)
     **/
    private $caption;
    /**
     *@Column(name="created_time",type="datetime") 
     **/
    private $createdTime;
    /**
     *@Column(name="profile_picture",type="blob")
     **/
    private $profilePicture;
    /**
     *@Column(name="post_picture",type="blob")
     **/
    private $postPicture;
    /**
     *@Column(name="panel_picture",type="blob")
     **/
    private $panelPicture;
    /**
     * @ManyToOne(targetEntity="User")
     * @JoinColumn(name="uid_fk", referencedColumnName="id")
     **/
    private $uidFk;
    
    public function __construct($caption = null) {
        $this->caption = $caption;
    }
}

?>
