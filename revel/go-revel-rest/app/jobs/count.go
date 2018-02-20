package jobs

import (
	"fmt"
	"github.com/revel/revel"
	"github.com/revel/modules/jobs/app/jobs"
	gorm "github.com/revel/modules/orm/gorm/app"
)


// Periodically count the users in the database.
type UserCounter struct{
}

func (c UserCounter) Run() {

	var count1 int64
	gorm.DB.Table("users").Count(&count1)
	if count1 <= 0 {
		fmt.Println("Should find some users")
	}
	fmt.Printf("There are %d users.\n", count1)
}

func init() {
	revel.OnAppStart(func() {
		jobs.Schedule("@every 1m", UserCounter{})
	})
}
