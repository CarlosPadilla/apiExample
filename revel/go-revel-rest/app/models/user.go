package models

import (
	"github.com/jinzhu/gorm"
	"golang.org/x/crypto/bcrypt"
)

// User model
type User struct {
	gorm.Model
	Username           string `gorm:"size:255" `
	Name           string `gorm:"size:255" `
	Email          string `gorm:"type:varchar(100);unique_index" `
	Active         bool
	HashedPassword []byte
}

// SetNewPassword set a new hashsed password to user
func (user *User) SetNewPassword(passwordString string) {
	bcryptPassword, _ := bcrypt.GenerateFromPassword([]byte(passwordString), bcrypt.DefaultCost)
	user.HashedPassword = bcryptPassword
}
