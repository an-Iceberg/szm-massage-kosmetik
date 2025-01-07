mod routes;

use actix_files::Files;
use actix_web::{App, HttpServer};
use routes::{create_blog, index};
use tera::Tera;
use lazy_static::lazy_static;

lazy_static!
{
  pub static ref TERA: Tera =
  {
    let mut tera = match Tera::new("templates/**/*.html")
    {
      Ok(t) => t,
      Err(e) =>
      {
        println!("Parsing error(s): {}", e);
        ::std::process::exit(1);
      }
    };
    tera.autoescape_on(vec![".html", ".sql"]);
    // tera.register_filter("do_nothing", do_nothing_filter);
    tera
  };
}

#[actix_web::main]
async fn main() -> std::io::Result<()>
{
  HttpServer::new(||
  {
    App::new()
      .service(index)
      .service(create_blog)
      .service(Files::new("/", "./static"))
  })
  .bind(("127.0.0.1", 8080))?
  .run()
  .await
}
