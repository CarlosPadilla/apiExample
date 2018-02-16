package jobs

import (
	"fmt"
	"github.com/revel/revel"

	"github.com/revel/modules/jobs/app/jobs"
	"github.com/revel/modules/orm/gorp/app"
)

// Periodically count the users in the database.
type UserCounter struct{}

func (c UserCounter) Run() {
	users, err := gorp.Db.Map.SelectInt(`SELECT count(*) FROM "User"`)
	if err != nil {
		fmt.Println(err)
	}
	fmt.Printf("There are %d users.\n", users)
}

func init() {
	revel.OnAppStart(func() {
		jobs.Schedule("@every 1m", UserCounter{})
	})
}
