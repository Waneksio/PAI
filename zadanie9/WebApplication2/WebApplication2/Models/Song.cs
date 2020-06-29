using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Web;

namespace WebApplication2.Models
{
    [Table("genrelist")]
    public class Genre
    {
        [Key]
        [ForeignKey("Songs")]
        public int Id { get; set; }
        [Required(ErrorMessage = "Name is required!")]
        [StringLength(100, ErrorMessage = "Maximal length of the name of a genre is 100 characters!")]
        public string Name { get; set; }
        public ICollection<Song> Songs { get; set; }
    }
    [Table("songlist")]
    public class Song
    {
        [Key]
        public int Id { get; set; }
        [Required(ErrorMessage = "Name is required!")]
        [StringLength(100, ErrorMessage = "Maximal length of the name of a song is 100 characters!")]
        public string Name { get; set; }
        [Required(ErrorMessage = "Artist is required!")]
        [StringLength(100, ErrorMessage = "Maximal length of name of the artist is 100 characters!")]

        public string Artist { get; set; }
        public int genrelist_GenreId { get; set; }
    }
}